<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class cacheRules extends Model
{
    /**
     * @example 8880
     *
     * @var string
     */
    public $additionalCacheablePorts;

    /**
     * @description The browser cache configuration. Valid values:
     *
     *   no_cache: does not cache resources.
     *   follow_origin: follows the origin\\"s cache rule.
     *   override_origin: uses a custom cache rule instead of the origin\\"s.
     *
     * @example follow_origin
     *
     * @var string
     */
    public $browserCacheMode;

    /**
     * @description The browser cache TTL. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $browserCacheTtl;

    /**
     * @description The configuration of bypass cache. Valid values:
     *
     *   cache_all: Responses of all requests are cached.
     *   default_cache (default): Resources are cached only based on supported file extensions.
     *   bypass_all: All requests bypass the cache component.
     *
     * @example default_cache
     *
     * @var string
     */
    public $bypassCache;

    /**
     * @example on
     *
     * @var string
     */
    public $cacheDeceptionArmor;

    /**
     * @example bypass_cache_reserve
     *
     * @var string
     */
    public $cacheReserveEligibility;

    /**
     * @example cookiename
     *
     * @var string
     */
    public $checkPresenceCookie;

    /**
     * @example headername
     *
     * @var string
     */
    public $checkPresenceHeader;

    /**
     * @description The edge cache configuration. Valid values:
     *
     *   follow_origin: follows the origin\\"s cache rule. If the origin does not have a cache rule, the default cache rule is used.
     *   no-cache: does not cache resources.
     *   override_origin: uses a custom cache rule instead of the origin\\"s.
     *   follow_origin_bypass: follows the origin\\"s cache rule. If the origin does not have a cache rule, no resources are cached.
     *
     * @example follow_origin
     *
     * @var string
     */
    public $edgeCacheMode;

    /**
     * @description The edge cache TTL. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeCacheTtl;

    /**
     * @description The status code TTL. Unit: seconds.
     *
     * @example 300
     *
     * @var string
     */
    public $edgeStatusCodeCacheTtl;

    /**
     * @description The cookie names and values included in the cache key. Separate multiple combinations with spaces.
     *
     * @example cookie_exapmle
     *
     * @var string
     */
    public $includeCookie;

    /**
     * @description The header names and values included in the cache key. Separate multiple combinations with spaces.
     *
     * @example example
     *
     * @var string
     */
    public $includeHeader;

    /**
     * @description The parameters to be retained or ignored in the query string. Separate multiple values with spaces.
     *
     * @example example
     *
     * @var string
     */
    public $queryString;

    /**
     * @description Specifies how to process the query string when cache keys are generated. Valid values:
     *
     *   ignore_all: ignores the entire query string.
     *   exclude_query_string: ignores specified parameters in the query string.
     *   reserve_all (default): retains the entire query string.
     *   include_query_string: retains specified parameters in the query string.
     *
     * @example reserve_all
     *
     * @var string
     */
    public $queryStringMode;

    /**
     * @description The rule content.
     *
     * @example [{"MatchType":"http.request.method","MatchOperator":"eq","MatchValue":"GET","Negate":false}]
     *
     * @var string
     */
    public $rule;

    /**
     * @description Specifies whether to enable the rule. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $ruleEnable;

    /**
     * @description The rule name.
     *
     * @example rule_example
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example on
     *
     * @var string
     */
    public $serveStale;

    /**
     * @description Specifies whether to sort query strings. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $sortQueryStringForCache;

    /**
     * @example on
     *
     * @var string
     */
    public $userDeviceType;

    /**
     * @example on
     *
     * @var string
     */
    public $userGeo;

    /**
     * @example on
     *
     * @var string
     */
    public $userLanguage;
    protected $_name = [
        'additionalCacheablePorts' => 'AdditionalCacheablePorts',
        'browserCacheMode'         => 'BrowserCacheMode',
        'browserCacheTtl'          => 'BrowserCacheTtl',
        'bypassCache'              => 'BypassCache',
        'cacheDeceptionArmor'      => 'CacheDeceptionArmor',
        'cacheReserveEligibility'  => 'CacheReserveEligibility',
        'checkPresenceCookie'      => 'CheckPresenceCookie',
        'checkPresenceHeader'      => 'CheckPresenceHeader',
        'edgeCacheMode'            => 'EdgeCacheMode',
        'edgeCacheTtl'             => 'EdgeCacheTtl',
        'edgeStatusCodeCacheTtl'   => 'EdgeStatusCodeCacheTtl',
        'includeCookie'            => 'IncludeCookie',
        'includeHeader'            => 'IncludeHeader',
        'queryString'              => 'QueryString',
        'queryStringMode'          => 'QueryStringMode',
        'rule'                     => 'Rule',
        'ruleEnable'               => 'RuleEnable',
        'ruleName'                 => 'RuleName',
        'serveStale'               => 'ServeStale',
        'sortQueryStringForCache'  => 'SortQueryStringForCache',
        'userDeviceType'           => 'UserDeviceType',
        'userGeo'                  => 'UserGeo',
        'userLanguage'             => 'UserLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalCacheablePorts) {
            $res['AdditionalCacheablePorts'] = $this->additionalCacheablePorts;
        }
        if (null !== $this->browserCacheMode) {
            $res['BrowserCacheMode'] = $this->browserCacheMode;
        }
        if (null !== $this->browserCacheTtl) {
            $res['BrowserCacheTtl'] = $this->browserCacheTtl;
        }
        if (null !== $this->bypassCache) {
            $res['BypassCache'] = $this->bypassCache;
        }
        if (null !== $this->cacheDeceptionArmor) {
            $res['CacheDeceptionArmor'] = $this->cacheDeceptionArmor;
        }
        if (null !== $this->cacheReserveEligibility) {
            $res['CacheReserveEligibility'] = $this->cacheReserveEligibility;
        }
        if (null !== $this->checkPresenceCookie) {
            $res['CheckPresenceCookie'] = $this->checkPresenceCookie;
        }
        if (null !== $this->checkPresenceHeader) {
            $res['CheckPresenceHeader'] = $this->checkPresenceHeader;
        }
        if (null !== $this->edgeCacheMode) {
            $res['EdgeCacheMode'] = $this->edgeCacheMode;
        }
        if (null !== $this->edgeCacheTtl) {
            $res['EdgeCacheTtl'] = $this->edgeCacheTtl;
        }
        if (null !== $this->edgeStatusCodeCacheTtl) {
            $res['EdgeStatusCodeCacheTtl'] = $this->edgeStatusCodeCacheTtl;
        }
        if (null !== $this->includeCookie) {
            $res['IncludeCookie'] = $this->includeCookie;
        }
        if (null !== $this->includeHeader) {
            $res['IncludeHeader'] = $this->includeHeader;
        }
        if (null !== $this->queryString) {
            $res['QueryString'] = $this->queryString;
        }
        if (null !== $this->queryStringMode) {
            $res['QueryStringMode'] = $this->queryStringMode;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->serveStale) {
            $res['ServeStale'] = $this->serveStale;
        }
        if (null !== $this->sortQueryStringForCache) {
            $res['SortQueryStringForCache'] = $this->sortQueryStringForCache;
        }
        if (null !== $this->userDeviceType) {
            $res['UserDeviceType'] = $this->userDeviceType;
        }
        if (null !== $this->userGeo) {
            $res['UserGeo'] = $this->userGeo;
        }
        if (null !== $this->userLanguage) {
            $res['UserLanguage'] = $this->userLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cacheRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalCacheablePorts'])) {
            $model->additionalCacheablePorts = $map['AdditionalCacheablePorts'];
        }
        if (isset($map['BrowserCacheMode'])) {
            $model->browserCacheMode = $map['BrowserCacheMode'];
        }
        if (isset($map['BrowserCacheTtl'])) {
            $model->browserCacheTtl = $map['BrowserCacheTtl'];
        }
        if (isset($map['BypassCache'])) {
            $model->bypassCache = $map['BypassCache'];
        }
        if (isset($map['CacheDeceptionArmor'])) {
            $model->cacheDeceptionArmor = $map['CacheDeceptionArmor'];
        }
        if (isset($map['CacheReserveEligibility'])) {
            $model->cacheReserveEligibility = $map['CacheReserveEligibility'];
        }
        if (isset($map['CheckPresenceCookie'])) {
            $model->checkPresenceCookie = $map['CheckPresenceCookie'];
        }
        if (isset($map['CheckPresenceHeader'])) {
            $model->checkPresenceHeader = $map['CheckPresenceHeader'];
        }
        if (isset($map['EdgeCacheMode'])) {
            $model->edgeCacheMode = $map['EdgeCacheMode'];
        }
        if (isset($map['EdgeCacheTtl'])) {
            $model->edgeCacheTtl = $map['EdgeCacheTtl'];
        }
        if (isset($map['EdgeStatusCodeCacheTtl'])) {
            $model->edgeStatusCodeCacheTtl = $map['EdgeStatusCodeCacheTtl'];
        }
        if (isset($map['IncludeCookie'])) {
            $model->includeCookie = $map['IncludeCookie'];
        }
        if (isset($map['IncludeHeader'])) {
            $model->includeHeader = $map['IncludeHeader'];
        }
        if (isset($map['QueryString'])) {
            $model->queryString = $map['QueryString'];
        }
        if (isset($map['QueryStringMode'])) {
            $model->queryStringMode = $map['QueryStringMode'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['ServeStale'])) {
            $model->serveStale = $map['ServeStale'];
        }
        if (isset($map['SortQueryStringForCache'])) {
            $model->sortQueryStringForCache = $map['SortQueryStringForCache'];
        }
        if (isset($map['UserDeviceType'])) {
            $model->userDeviceType = $map['UserDeviceType'];
        }
        if (isset($map['UserGeo'])) {
            $model->userGeo = $map['UserGeo'];
        }
        if (isset($map['UserLanguage'])) {
            $model->userLanguage = $map['UserLanguage'];
        }

        return $model;
    }
}
