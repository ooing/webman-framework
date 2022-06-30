<?php
/**
 * This file is part of webman.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    walkor<walkor@workerman.net>
 * @copyright walkor<walkor@workerman.net>
 * @link      http://www.workerman.net/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace support;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @method static \Illuminate\Database\Eloquent\Model make($attributes = [])
 * @method static \Illuminate\Database\Eloquent\Builder withGlobalScope($identifier, $scope)
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScope($scope)
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScopes($scopes = null)
 * @method static array removedScopes()
 * @method static \Illuminate\Database\Eloquent\Builder whereKey($id)
 * @method static \Illuminate\Database\Eloquent\Builder whereKeyNot($id)
 * @method static \Illuminate\Database\Eloquent\Builder where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Model|null firstWhere($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder orWhere($column, $operator = null, $value = null)
 * @method static \Illuminate\Database\Eloquent\Builder latest($column = null)
 * @method static \Illuminate\Database\Eloquent\Builder oldest($column = null)
 * @method static \Illuminate\Database\Eloquent\Collection hydrate($items)
 * @method static \Illuminate\Database\Eloquent\Collection fromQuery($query, $bindings = [])
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection[]|null find($id, $columns = [])
 * @method static \Illuminate\Database\Eloquent\Collection findMany($ids, $columns = [])
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection[] findOrFail($id, $columns = [])
 * @method static \Illuminate\Database\Eloquent\Model findOrNew($id, $columns = [])
 * @method static \Illuminate\Database\Eloquent\Model firstOrNew($attributes = [], $values = [])
 * @method static \Illuminate\Database\Eloquent\Model firstOrCreate($attributes = [], $values = [])
 * @method static \Illuminate\Database\Eloquent\Model updateOrCreate($attributes, $values = [])
 * @method static \Illuminate\Database\Eloquent\Model firstOrFail($columns = [])
 * @method static \Illuminate\Database\Eloquent\Model|mixed firstOr($columns = [], $callback = null)
 * @method static \Illuminate\Database\Eloquent\Model sole($columns = [])
 * @method static mixed value($column)
 * @method static \Illuminate\Database\Eloquent\Collection[] get($columns = [])
 * @method static \Illuminate\Database\Eloquent\Model[][] getModels($columns = [])
 * @method static array eagerLoadRelations($models)
 * @method static \Illuminate\Support\LazyCollection cursor()
 * @method static \Illuminate\Support\Collection pluck($column, $key = null)
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
 * @method static \Illuminate\Contracts\Pagination\CursorPaginator cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
 * @method static \Illuminate\Database\Eloquent\Model|$this create($attributes = [])
 * @method static \Illuminate\Database\Eloquent\Model|$this forceCreate($attributes)
 * @method static int upsert($values, $uniqueBy, $update = null)
 * @method static void onDelete($callback)
 * @method static static|mixed scopes($scopes)
 * @method static static applyScopes()
 * @method static \Illuminate\Database\Eloquent\Builder without($relations)
 * @method static \Illuminate\Database\Eloquent\Builder withOnly($relations)
 * @method static \Illuminate\Database\Eloquent\Model newModelInstance($attributes = [])
 * @method static \Illuminate\Database\Eloquent\Builder withCasts($casts)
 * @method static \Illuminate\Database\Query\Builder getQuery()
 * @method static \Illuminate\Database\Eloquent\Builder setQuery($query)
 * @method static \Illuminate\Database\Query\Builder toBase()
 * @method static array getEagerLoads()
 * @method static \Illuminate\Database\Eloquent\Builder setEagerLoads($eagerLoad)
 * @method static \Illuminate\Database\Eloquent\Model getModel()
 * @method static \Illuminate\Database\Eloquent\Builder setModel($model)
 * @method static \Closure getMacro($name)
 * @method static bool hasMacro($name)
 * @method static \Closure getGlobalMacro($name)
 * @method static bool hasGlobalMacro($name)
 * @method static static clone()
 * @method static \Illuminate\Database\Eloquent\Builder has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orHas($relation, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder doesntHave($relation, $boolean = 'and', $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orDoesntHave($relation)
 * @method static \Illuminate\Database\Eloquent\Builder whereHas($relation, $callback = null, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder whereDoesntHave($relation, $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orWhereDoesntHave($relation, $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orHasMorph($relation, $types, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orDoesntHaveMorph($relation, $types)
 * @method static \Illuminate\Database\Eloquent\Builder whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
 * @method static \Illuminate\Database\Eloquent\Builder whereDoesntHaveMorph($relation, $types, $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder orWhereDoesntHaveMorph($relation, $types, $callback = null)
 * @method static \Illuminate\Database\Eloquent\Builder withAggregate($relations, $column, $function = null)
 * @method static \Illuminate\Database\Eloquent\Builder withCount($relations)
 * @method static \Illuminate\Database\Eloquent\Builder withMax($relation, $column)
 * @method static \Illuminate\Database\Eloquent\Builder withMin($relation, $column)
 * @method static \Illuminate\Database\Eloquent\Builder withSum($relation, $column)
 * @method static \Illuminate\Database\Eloquent\Builder withAvg($relation, $column)
 * @method static \Illuminate\Database\Eloquent\Builder withExists($relation)
 * @method static \Illuminate\Database\Eloquent\Builder mergeConstraintsFrom($from)
 * @method static \Illuminate\Support\Collection explain()
 * @method static bool chunk($count, $callback)
 * @method static \Illuminate\Support\Collection chunkMap($callback, $count = 1000)
 * @method static bool each($callback, $count = 1000)
 * @method static bool chunkById($count, $callback, $column = null, $alias = null)
 * @method static bool eachById($callback, $count = 1000, $column = null, $alias = null)
 * @method static \Illuminate\Support\LazyCollection lazy($chunkSize = 1000)
 * @method static \Illuminate\Support\LazyCollection lazyById($chunkSize = 1000, $column = null, $alias = null)
 * @method static \Illuminate\Database\Eloquent\Model|object|null first($columns = [])
 * @method static \Illuminate\Database\Eloquent\Model|object|null baseSole($columns = [])
 * @method static \Illuminate\Database\Eloquent\Builder tap($callback)
 * @method static mixed when($value, $callback, $default = null)
 * @method static mixed unless($value, $callback, $default = null)
 * @method static \Illuminate\Database\Query\Builder select($columns = [])
 * @method static \Illuminate\Database\Query\Builder selectSub($query, $as)
 * @method static \Illuminate\Database\Query\Builder selectRaw($expression, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder fromSub($query, $as)
 * @method static \Illuminate\Database\Query\Builder fromRaw($expression, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder addSelect($column)
 * @method static \Illuminate\Database\Query\Builder distinct()
 * @method static \Illuminate\Database\Query\Builder from($table, $as = null)
 * @method static \Illuminate\Database\Query\Builder join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 * @method static \Illuminate\Database\Query\Builder joinWhere($table, $first, $operator, $second, $type = 'inner')
 * @method static \Illuminate\Database\Query\Builder joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
 * @method static \Illuminate\Database\Query\Builder leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder leftJoinWhere($table, $first, $operator, $second)
 * @method static \Illuminate\Database\Query\Builder leftJoinSub($query, $as, $first, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder rightJoinWhere($table, $first, $operator, $second)
 * @method static \Illuminate\Database\Query\Builder rightJoinSub($query, $as, $first, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder crossJoin($table, $first = null, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder crossJoinSub($query, $as)
 * @method static void mergeWheres($wheres, $bindings)
 * @method static array prepareValueAndOperator($value, $operator, $useDefault = false)
 * @method static \Illuminate\Database\Query\Builder whereColumn($first, $operator = null, $second = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereColumn($first, $operator = null, $second = null)
 * @method static \Illuminate\Database\Query\Builder whereRaw($sql, $bindings = [], $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereRaw($sql, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereIn($column, $values)
 * @method static \Illuminate\Database\Query\Builder whereNotIn($column, $values, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereNotIn($column, $values)
 * @method static \Illuminate\Database\Query\Builder whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereIntegerInRaw($column, $values)
 * @method static \Illuminate\Database\Query\Builder whereIntegerNotInRaw($column, $values, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereIntegerNotInRaw($column, $values)
 * @method static \Illuminate\Database\Query\Builder whereNull($columns, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereNull($column)
 * @method static \Illuminate\Database\Query\Builder whereNotNull($columns, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder whereBetween($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereBetween($column, $values)
 * @method static \Illuminate\Database\Query\Builder orWhereBetweenColumns($column, $values)
 * @method static \Illuminate\Database\Query\Builder whereNotBetween($column, $values, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder whereNotBetweenColumns($column, $values, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereNotBetween($column, $values)
 * @method static \Illuminate\Database\Query\Builder orWhereNotBetweenColumns($column, $values)
 * @method static \Illuminate\Database\Query\Builder orWhereNotNull($column)
 * @method static \Illuminate\Database\Query\Builder whereDate($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereDate($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder whereTime($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereTime($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder whereDay($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereDay($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder whereMonth($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereMonth($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder whereYear($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereYear($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder whereNested($callback, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder forNestedWhere()
 * @method static \Illuminate\Database\Query\Builder addNestedWhereQuery($query, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder whereExists($callback, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereExists($callback, $not = false)
 * @method static \Illuminate\Database\Query\Builder whereNotExists($callback, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereNotExists($callback)
 * @method static \Illuminate\Database\Query\Builder addWhereExistsQuery($query, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder whereRowValues($columns, $operator, $values, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereRowValues($columns, $operator, $values)
 * @method static \Illuminate\Database\Query\Builder whereJsonContains($column, $value, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder orWhereJsonContains($column, $value)
 * @method static \Illuminate\Database\Query\Builder whereJsonDoesntContain($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereJsonDoesntContain($column, $value)
 * @method static \Illuminate\Database\Query\Builder whereJsonLength($column, $operator, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orWhereJsonLength($column, $operator, $value = null)
 * @method static \Illuminate\Database\Query\Builder dynamicWhere($method, $parameters)
 * @method static \Illuminate\Database\Query\Builder groupBy(...$groups)
 * @method static \Illuminate\Database\Query\Builder groupByRaw($sql, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder having($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orHaving($column, $operator = null, $value = null)
 * @method static \Illuminate\Database\Query\Builder havingBetween($column, $values, $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Query\Builder havingRaw($sql, $bindings = [], $boolean = 'and')
 * @method static \Illuminate\Database\Query\Builder orHavingRaw($sql, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder orderBy($column, $direction = 'asc')
 * @method static \Illuminate\Database\Query\Builder orderByDesc($column)
 * @method static \Illuminate\Database\Query\Builder inRandomOrder($seed = '')
 * @method static \Illuminate\Database\Query\Builder orderByRaw($sql, $bindings = [])
 * @method static \Illuminate\Database\Query\Builder skip($value)
 * @method static \Illuminate\Database\Query\Builder offset($value)
 * @method static \Illuminate\Database\Query\Builder take($value)
 * @method static \Illuminate\Database\Query\Builder limit($value)
 * @method static \Illuminate\Database\Query\Builder forPage($page, $perPage = 15)
 * @method static \Illuminate\Database\Query\Builder forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
 * @method static \Illuminate\Database\Query\Builder forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
 * @method static \Illuminate\Database\Query\Builder reorder($column = null, $direction = 'asc')
 * @method static \Illuminate\Database\Query\Builder union($query, $all = false)
 * @method static \Illuminate\Database\Query\Builder unionAll($query)
 * @method static \Illuminate\Database\Query\Builder lock($value = true)
 * @method static \Illuminate\Database\Query\Builder lockForUpdate()
 * @method static \Illuminate\Database\Query\Builder sharedLock()
 * @method static \Illuminate\Database\Query\Builder beforeQuery($callback)
 * @method static void applyBeforeQueryCallbacks()
 * @method static string toSql()
 * @method static int getCountForPagination($columns = [])
 * @method static string implode($column, $glue = '')
 * @method static bool exists()
 * @method static bool doesntExist()
 * @method static mixed existsOr($callback)
 * @method static mixed doesntExistOr($callback)
 * @method static int count($columns = '*')
 * @method static mixed min($column)
 * @method static mixed max($column)
 * @method static mixed sum($column)
 * @method static mixed avg($column)
 * @method static mixed average($column)
 * @method static mixed aggregate($function, $columns = [])
 * @method static float|int numericAggregate($function, $columns = [])
 * @method static bool insert($values)
 * @method static int insertOrIgnore($values)
 * @method static int insertGetId($values, $sequence = null)
 * @method static int insertUsing($columns, $query)
 * @method static bool updateOrInsert($attributes, $values = [])
 * @method static void truncate()
 * @method static \Illuminate\Database\Query\Expression raw($value)
 * @method static array getBindings()
 * @method static array getRawBindings()
 * @method static \Illuminate\Database\Query\Builder setBindings($bindings, $type = 'where')
 * @method static \Illuminate\Database\Query\Builder addBinding($value, $type = 'where')
 * @method static \Illuminate\Database\Query\Builder mergeBindings($query)
 * @method static array cleanBindings($bindings)
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor()
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar()
 * @method static \Illuminate\Database\Query\Builder useWritePdo()
 * @method static static cloneWithout($properties)
 * @method static static cloneWithoutBindings($except)
 * @method static \Illuminate\Database\Query\Builder dump()
 * @method static void dd()
 * @method static void macro($name, $macro)
 * @method static void mixin($mixin, $replace = true)
 * @method static mixed macroCall($method, $parameters)
 */
class Model extends BaseModel
{

}
