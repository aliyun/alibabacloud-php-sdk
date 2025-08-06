<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class AddLicenseRequest extends Model
{
    /**
     * @var string
     */
    public $appItemId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appPlatforms;

    /**
     * @var string
     */
    public $contractNo;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $sdkModels;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'appName' => 'AppName',
        'appPlatforms' => 'AppPlatforms',
        'contractNo' => 'ContractNo',
        'instanceId' => 'InstanceId',
        'sdkModels' => 'SdkModels',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appItemId) {
            $res['AppItemId'] = $this->appItemId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appPlatforms) {
            $res['AppPlatforms'] = $this->appPlatforms;
        }

        if (null !== $this->contractNo) {
            $res['ContractNo'] = $this->contractNo;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->sdkModels) {
            $res['SdkModels'] = $this->sdkModels;
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
        if (isset($map['AppItemId'])) {
            $model->appItemId = $map['AppItemId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppPlatforms'])) {
            $model->appPlatforms = $map['AppPlatforms'];
        }

        if (isset($map['ContractNo'])) {
            $model->contractNo = $map['ContractNo'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SdkModels'])) {
            $model->sdkModels = $map['SdkModels'];
        }

        return $model;
    }
}
