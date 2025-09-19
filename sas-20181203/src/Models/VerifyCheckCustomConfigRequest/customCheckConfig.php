<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\VerifyCheckCustomConfigRequest\customCheckConfig\cloudAssetInstance;

class customCheckConfig extends Model
{
    /**
     * @var string
     */
    public $checkRule;

    /**
     * @var cloudAssetInstance
     */
    public $cloudAssetInstance;

    /**
     * @var string
     */
    public $instanceSubType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'checkRule' => 'CheckRule',
        'cloudAssetInstance' => 'CloudAssetInstance',
        'instanceSubType' => 'InstanceSubType',
        'instanceType' => 'InstanceType',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (null !== $this->cloudAssetInstance) {
            $this->cloudAssetInstance->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRule) {
            $res['CheckRule'] = $this->checkRule;
        }

        if (null !== $this->cloudAssetInstance) {
            $res['CloudAssetInstance'] = null !== $this->cloudAssetInstance ? $this->cloudAssetInstance->toArray($noStream) : $this->cloudAssetInstance;
        }

        if (null !== $this->instanceSubType) {
            $res['InstanceSubType'] = $this->instanceSubType;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['CheckRule'])) {
            $model->checkRule = $map['CheckRule'];
        }

        if (isset($map['CloudAssetInstance'])) {
            $model->cloudAssetInstance = cloudAssetInstance::fromMap($map['CloudAssetInstance']);
        }

        if (isset($map['InstanceSubType'])) {
            $model->instanceSubType = $map['InstanceSubType'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
