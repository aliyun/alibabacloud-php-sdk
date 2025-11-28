<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListDeviceGroupResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var int
     */
    public $authorizedCount;

    /**
     * @var bool
     */
    public $currentUser;

    /**
     * @var int
     */
    public $deviceCount;

    /**
     * @var string
     */
    public $deviceGroupId;

    /**
     * @var string
     */
    public $memberName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authorizedCount' => 'AuthorizedCount',
        'currentUser' => 'CurrentUser',
        'deviceCount' => 'DeviceCount',
        'deviceGroupId' => 'DeviceGroupId',
        'memberName' => 'MemberName',
        'name' => 'Name',
        'productKey' => 'ProductKey',
        'remark' => 'Remark',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizedCount) {
            $res['AuthorizedCount'] = $this->authorizedCount;
        }

        if (null !== $this->currentUser) {
            $res['CurrentUser'] = $this->currentUser;
        }

        if (null !== $this->deviceCount) {
            $res['DeviceCount'] = $this->deviceCount;
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
        }

        if (null !== $this->memberName) {
            $res['MemberName'] = $this->memberName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedCount'])) {
            $model->authorizedCount = $map['AuthorizedCount'];
        }

        if (isset($map['CurrentUser'])) {
            $model->currentUser = $map['CurrentUser'];
        }

        if (isset($map['DeviceCount'])) {
            $model->deviceCount = $map['DeviceCount'];
        }

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        if (isset($map['MemberName'])) {
            $model->memberName = $map['MemberName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
