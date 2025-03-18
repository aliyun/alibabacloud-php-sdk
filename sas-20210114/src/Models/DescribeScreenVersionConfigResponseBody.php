<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Tea\Model;

class DescribeScreenVersionConfigResponseBody extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $assetLevel;

    /**
     * @example sas-b5***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $isTrialVersion;

    /**
     * @example 1625846400000
     *
     * @var int
     */
    public $releaseTime;

    /**
     * @example CE500770-42D3-442E-9DDD-1XXXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $sasLog;

    /**
     * @example 0
     *
     * @var int
     */
    public $sasScreen;

    /**
     * @example 3
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'assetLevel' => 'AssetLevel',
        'instanceId' => 'InstanceId',
        'isTrialVersion' => 'IsTrialVersion',
        'releaseTime' => 'ReleaseTime',
        'requestId' => 'RequestId',
        'sasLog' => 'SasLog',
        'sasScreen' => 'SasScreen',
        'version' => 'Version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetLevel) {
            $res['AssetLevel'] = $this->assetLevel;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isTrialVersion) {
            $res['IsTrialVersion'] = $this->isTrialVersion;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sasLog) {
            $res['SasLog'] = $this->sasLog;
        }
        if (null !== $this->sasScreen) {
            $res['SasScreen'] = $this->sasScreen;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScreenVersionConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetLevel'])) {
            $model->assetLevel = $map['AssetLevel'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsTrialVersion'])) {
            $model->isTrialVersion = $map['IsTrialVersion'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SasLog'])) {
            $model->sasLog = $map['SasLog'];
        }
        if (isset($map['SasScreen'])) {
            $model->sasScreen = $map['SasScreen'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
