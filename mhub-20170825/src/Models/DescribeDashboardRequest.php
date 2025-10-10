<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;

class DescribeDashboardRequest extends Model
{
    /**
     * @var string
     */
    public $appKey;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $proxyAction;

    /**
     * @var string
     */
    public $serviceName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
