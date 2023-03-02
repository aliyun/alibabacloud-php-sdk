<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\ListDeviceGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example ID2
     *
     * @var string
     */
    public $authorizeType;

    /**
     * @example 577187700697****
     *
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @example 19720316234381****
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @example hKpHMh2****
     *
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $remark;

    /**
     * @example AUTHORIZED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'authorizeType' => 'AuthorizeType',
        'deviceGroupId' => 'DeviceGroupId',
        'ownerName'     => 'OwnerName',
        'ownerUid'      => 'OwnerUid',
        'productKey'    => 'ProductKey',
        'remark'        => 'Remark',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizeType) {
            $res['AuthorizeType'] = $this->authorizeType;
        }
        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizeType'])) {
            $model->authorizeType = $map['AuthorizeType'];
        }
        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
