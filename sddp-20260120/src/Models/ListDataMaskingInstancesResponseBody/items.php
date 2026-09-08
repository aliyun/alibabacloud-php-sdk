<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20260120\Models\ListDataMaskingInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $encryptionAlgorithm;

    /**
     * @var string
     */
    public $encryptionKeyId;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var int
     */
    public $fullAccessAccountCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'encryptionAlgorithm' => 'EncryptionAlgorithm',
        'encryptionKeyId' => 'EncryptionKeyId',
        'engineType' => 'EngineType',
        'fullAccessAccountCount' => 'FullAccessAccountCount',
        'instanceId' => 'InstanceId',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'regionId' => 'RegionId',
        'regionName' => 'RegionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptionAlgorithm) {
            $res['EncryptionAlgorithm'] = $this->encryptionAlgorithm;
        }

        if (null !== $this->encryptionKeyId) {
            $res['EncryptionKeyId'] = $this->encryptionKeyId;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->fullAccessAccountCount) {
            $res['FullAccessAccountCount'] = $this->fullAccessAccountCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
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
        if (isset($map['EncryptionAlgorithm'])) {
            $model->encryptionAlgorithm = $map['EncryptionAlgorithm'];
        }

        if (isset($map['EncryptionKeyId'])) {
            $model->encryptionKeyId = $map['EncryptionKeyId'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['FullAccessAccountCount'])) {
            $model->fullAccessAccountCount = $map['FullAccessAccountCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
