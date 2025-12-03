<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models;

use AlibabaCloud\Dara\Model;

class DescribeScreenVersionConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $assetLevel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isTrialVersion;

    /**
     * @var int
     */
    public $releaseTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sasLog;

    /**
     * @var int
     */
    public $sasScreen;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
