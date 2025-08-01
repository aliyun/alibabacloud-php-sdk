<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class GetApplicationListShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of an application.
     *
     * @example hkhon1po62@c3df23522b*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of an application.
     *
     * @example rest-container
     *
     * @var string
     */
    public $appName;

    /**
     * @description The programming language of the application, such as Java and Go.
     *
     * @example Java
     *
     * @var string
     */
    public $language;

    /**
     * @description The microservice namespace to which the application belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of the page to return.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description Specifies whether to enable the Sentinel-compatible mode.
     *
     * @example true
     *
     * @var bool
     */
    public $sentinelEnable;

    /**
     * @description The source of the application. The value is fixed as edasmsc.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description Specifies whether to enable switching.
     *
     * @example true
     *
     * @var bool
     */
    public $switchEnable;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'language' => 'Language',
        'namespace' => 'Namespace',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'region' => 'Region',
        'sentinelEnable' => 'SentinelEnable',
        'source' => 'Source',
        'switchEnable' => 'SwitchEnable',
        'tagsShrink' => 'Tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->sentinelEnable) {
            $res['SentinelEnable'] = $this->sentinelEnable;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->switchEnable) {
            $res['SwitchEnable'] = $this->switchEnable;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApplicationListShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SentinelEnable'])) {
            $model->sentinelEnable = $map['SentinelEnable'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SwitchEnable'])) {
            $model->switchEnable = $map['SwitchEnable'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
