<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;

class ModifyFEClusterRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $FEClassCode;

    /**
     * @var string
     */
    public $FEClusterId;

    /**
     * @var string
     */
    public $FENodeCount;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'FEClassCode' => 'FEClassCode',
        'FEClusterId' => 'FEClusterId',
        'FENodeCount' => 'FENodeCount',
        'product' => 'Product',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->FEClassCode) {
            $res['FEClassCode'] = $this->FEClassCode;
        }

        if (null !== $this->FEClusterId) {
            $res['FEClusterId'] = $this->FEClusterId;
        }

        if (null !== $this->FENodeCount) {
            $res['FENodeCount'] = $this->FENodeCount;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['FEClassCode'])) {
            $model->FEClassCode = $map['FEClassCode'];
        }

        if (isset($map['FEClusterId'])) {
            $model->FEClusterId = $map['FEClusterId'];
        }

        if (isset($map['FENodeCount'])) {
            $model->FENodeCount = $map['FENodeCount'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
