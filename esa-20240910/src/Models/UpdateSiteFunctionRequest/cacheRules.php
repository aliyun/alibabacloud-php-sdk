<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class cacheRules extends Model
{
    /**
     * @var string
     */
    public $additionalCacheablePorts;

    /**
     * @var string
     */
    public $browserCacheMode;

    /**
     * @var string
     */
    public $browserCacheTtl;

    /**
     * @var string
     */
    public $bypassCache;

    /**
     * @var string
     */
    public $cacheDeceptionArmor;

    /**
     * @var string
     */
    public $cacheReserveEligibility;

    /**
     * @var string
     */
    public $checkPresenceCookie;

    /**
     * @var string
     */
    public $checkPresenceHeader;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $edgeCacheMode;

    /**
     * @var string
     */
    public $edgeCacheTtl;

    /**
     * @var string
     */
    public $edgeStatusCodeCacheTtl;

    /**
     * @var string
     */
    public $includeCookie;

    /**
     * @var string
     */
    public $includeHeader;

    /**
     * @var string
     */
    public $queryString;

    /**
     * @var string
     */
    public $queryStringMode;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $serveStale;

    /**
     * @var string
     */
    public $sortQueryStringForCache;

    /**
     * @var string
     */
    public $userDeviceType;

    /**
     * @var string
     */
    public $userGeo;

    /**
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
        'configId'                 => 'ConfigId',
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
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
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
