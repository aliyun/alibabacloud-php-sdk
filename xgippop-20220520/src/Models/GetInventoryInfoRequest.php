<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetInventoryInfoRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $itemCode;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $UId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'itemCode'   => 'ItemCode',
        'mobile'     => 'Mobile',
        'UId'        => 'UId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInventoryInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        return $model;
    }
}
