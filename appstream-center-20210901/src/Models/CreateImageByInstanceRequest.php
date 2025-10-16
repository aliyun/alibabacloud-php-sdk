<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class CreateImageByInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoCleanUserdata;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $diskType;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $subInstanceId;
    protected $_name = [
        'autoCleanUserdata' => 'AutoCleanUserdata',
        'bizType' => 'BizType',
        'description' => 'Description',
        'diskType' => 'DiskType',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'productType' => 'ProductType',
        'subInstanceId' => 'SubInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCleanUserdata) {
            $res['AutoCleanUserdata'] = $this->autoCleanUserdata;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->subInstanceId) {
            $res['SubInstanceId'] = $this->subInstanceId;
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
        if (isset($map['AutoCleanUserdata'])) {
            $model->autoCleanUserdata = $map['AutoCleanUserdata'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SubInstanceId'])) {
            $model->subInstanceId = $map['SubInstanceId'];
        }

        return $model;
    }
}
