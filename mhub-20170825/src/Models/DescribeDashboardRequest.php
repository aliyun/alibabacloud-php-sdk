<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Tea\Model;

class DescribeDashboardRequest extends Model
{
    /**
     * @example 29201799
     *
     * @var string
     */
    public $appKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $appType;

    /**
     * @example 4.8
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example 1681985390256
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 4.8
     *
     * @var string
     */
    public $keyword;

    /**
     * @example queryAppVersions
     *
     * @var string
     */
    public $proxyAction;

    /**
     * @example mqc
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 1681369984564
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'appKey' => 'AppKey',
        'appType' => 'AppType',
        'appVersion' => 'AppVersion',
        'endTime' => 'EndTime',
        'keyword' => 'Keyword',
        'proxyAction' => 'ProxyAction',
        'serviceName' => 'ServiceName',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->proxyAction) {
            $res['ProxyAction'] = $this->proxyAction;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDashboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['ProxyAction'])) {
            $model->proxyAction = $map['ProxyAction'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
