<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveCdnDiagnoseInfoRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $app;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $domain;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $intervalType;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $phase;

    /**
     * @var string
     */
    public $requestType;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamSuffix;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'app' => 'app',
        'domain' => 'domain',
        'endTime' => 'endTime',
        'intervalType' => 'intervalType',
        'phase' => 'phase',
        'requestType' => 'requestType',
        'startTime' => 'startTime',
        'streamName' => 'streamName',
        'streamSuffix' => 'streamSuffix',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->app) {
            $res['app'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->intervalType) {
            $res['intervalType'] = $this->intervalType;
        }
        if (null !== $this->phase) {
            $res['phase'] = $this->phase;
        }
        if (null !== $this->requestType) {
            $res['requestType'] = $this->requestType;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->streamName) {
            $res['streamName'] = $this->streamName;
        }
        if (null !== $this->streamSuffix) {
            $res['streamSuffix'] = $this->streamSuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCdnDiagnoseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['app'])) {
            $model->app = $map['app'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['intervalType'])) {
            $model->intervalType = $map['intervalType'];
        }
        if (isset($map['phase'])) {
            $model->phase = $map['phase'];
        }
        if (isset($map['requestType'])) {
            $model->requestType = $map['requestType'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['streamName'])) {
            $model->streamName = $map['streamName'];
        }
        if (isset($map['streamSuffix'])) {
            $model->streamSuffix = $map['streamSuffix'];
        }

        return $model;
    }
}
