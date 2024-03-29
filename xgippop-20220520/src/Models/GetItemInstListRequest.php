<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetItemInstListRequest extends Model
{
    /**
     * @var int
     */
    public $current;

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
    public $pageSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $UId;
    protected $_name = [
        'current'    => 'Current',
        'instanceId' => 'InstanceId',
        'itemCode'   => 'ItemCode',
        'mobile'     => 'Mobile',
        'pageSize'   => 'PageSize',
        'status'     => 'Status',
        'UId'        => 'UId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemCode) {
            $res['ItemCode'] = $this->itemCode;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetItemInstListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemCode'])) {
            $model->itemCode = $map['ItemCode'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        return $model;
    }
}
