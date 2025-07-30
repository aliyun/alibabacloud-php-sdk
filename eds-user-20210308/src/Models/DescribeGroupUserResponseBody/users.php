<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeGroupUserResponseBody;

use AlibabaCloud\Tea\Model;

class users extends Model
{
    /**
     * @example xx-xx-xx
     *
     * @var string
     */
    public $address;

    /**
     * @example https://avatar.****.com
     *
     * @var string
     */
    public $avatar;

    /**
     * @example alex****@aliyun.com
     *
     * @var string
     */
    public $email;

    /**
     * @example alex****
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example 2024-08-26T02:59:22.000+00:00
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2024-08-26T02:59:22.000+00:00
     *
     * @var string
     */
    public $gmtJoinGroup;

    /**
     * @example 123
     *
     * @var string
     */
    public $jobNumber;

    /**
     * @example alex
     *
     * @var string
     */
    public $nickName;

    /**
     * @example 188888****
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return users
     */
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
