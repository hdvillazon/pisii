<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\CategoriaCertificacionController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\MatriculadosController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\TutorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
	return $request->user();
});

Route::patch('actividad/{actividad}/cambiar_estado', [ActividadController::class, 'cambiarEstado']);
Route::resource('actividad', ActividadController::class);

Route::patch('categoria_certificacion/{categoriaCertificacion}/cambiar_estado', [CategoriaCertificacionController::class, 'cambiarEstado']);
Route::resource('categoria_certificacion', CategoriaCertificacionController::class);

Route::resource('estudiante', EstudianteController::class);

Route::resource('matriculados', MatriculadosController::class)->parameters(['matriculados' => 'matriculados']);

Route::patch('programa/{programa}/cambiar_estado', [ProgramaController::class, 'cambiarEstado']);
Route::resource('programa', ProgramaController::class);

Route::resource('proyecto', ProyectoController::class);

Route::patch('rol/{rol}/cambiar_estado', [RolController::class, 'cambiarEstado']);
Route::resource('rol', RolController::class);

Route::patch('semestre/{semestre}/cambiar_estado', [SemestreController::class, 'cambiarEstado']);
Route::resource('semestre', SemestreController::class);

Route::resource('tipo_documento', TipoDocumentoController::class);

Route::patch('tutor/{tutor}/cambiar_estado', [TutorController::class, 'cambiarEstado']);
Route::resource('tutor', TutorController::class);
