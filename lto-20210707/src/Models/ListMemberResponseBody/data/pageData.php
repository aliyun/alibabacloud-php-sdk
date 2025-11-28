<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models\ListMemberResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var string
     */
    public $adminName;

    /**
     * @var int
     */
    public $authorizedCount;

    /**
     * @var int
     */
    public $authorizedDeviceCount;

    /**
     * @var string
     */
    public $contactor;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $telephony;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'adminName' => 'AdminName',
        'authorizedCount' => 'AuthorizedCount',
        'authorizedDeviceCount' => 'AuthorizedDeviceCount',
        'contactor' => 'Contactor',
        'memberId' => 'MemberId',
        'name' => 'Name',
        'remark' => 'Remark',
        'status' => 'Status',
        'telephony' => 'Telephony',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminName) {
            $res['AdminName'] = $this->adminName;
        }

        if (null !== $this->authorizedCount) {
            $res['AuthorizedCount'] = $this->authorizedCount;
        }

        if (null !== $this->authorizedDeviceCount) {
            $res['AuthorizedDeviceCount'] = $this->authorizedDeviceCount;
        }

        if (null !== $this->contactor) {
            $res['Contactor'] = $this->contactor;
        }

        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->telephony) {
            $res['Telephony'] = $this->telephony;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AdminName'])) {
            $model->adminName = $map['AdminName'];
        }

        if (isset($map['AuthorizedCount'])) {
            $model->authorizedCount = $map['AuthorizedCount'];
        }

        if (isset($map['AuthorizedDeviceCount'])) {
            $model->authorizedDeviceCount = $map['AuthorizedDeviceCount'];
        }

        if (isset($map['Contactor'])) {
            $model->contactor = $map['Contactor'];
        }

        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Telephony'])) {
            $model->telephony = $map['Telephony'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
