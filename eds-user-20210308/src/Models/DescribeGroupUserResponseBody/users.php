<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserResponseBody;

use AlibabaCloud\Dara\Model;

class users extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtJoinGroup;

    /**
     * @var string
     */
    public $jobNumber;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'address' => 'Address',
        'avatar' => 'Avatar',
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'gmtCreated' => 'GmtCreated',
        'gmtJoinGroup' => 'GmtJoinGroup',
        'jobNumber' => 'JobNumber',
        'nickName' => 'NickName',
        'phone' => 'Phone',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtJoinGroup) {
            $res['GmtJoinGroup'] = $this->gmtJoinGroup;
        }

        if (null !== $this->jobNumber) {
            $res['JobNumber'] = $this->jobNumber;
        }

        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }

        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }

        if (isset($map['GmtJoinGroup'])) {
            $model->gmtJoinGroup = $map['GmtJoinGroup'];
        }

        if (isset($map['JobNumber'])) {
            $model->jobNumber = $map['JobNumber'];
        }

        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }

        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
