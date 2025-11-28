<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class UpdateMemberRequest extends Model
{
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
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $telephony;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'authorizedCount' => 'AuthorizedCount',
        'authorizedDeviceCount' => 'AuthorizedDeviceCount',
        'contactor' => 'Contactor',
        'memberId' => 'MemberId',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
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
