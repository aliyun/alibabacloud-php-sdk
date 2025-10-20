<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListBrandsResponseBody;

use AlibabaCloud\Dara\Model;

class brands extends Model
{
    /**
     * @var string
     */
    public $brandId;

    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $brandType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'brandId' => 'BrandId',
        'brandName' => 'BrandName',
        'brandType' => 'BrandType',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandId) {
            $res['BrandId'] = $this->brandId;
        }

        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }

        if (null !== $this->brandType) {
            $res['BrandType'] = $this->brandType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BrandId'])) {
            $model->brandId = $map['BrandId'];
        }

        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }

        if (isset($map['BrandType'])) {
            $model->brandType = $map['BrandType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
