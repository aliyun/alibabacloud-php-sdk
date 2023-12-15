<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationUsersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example a
     *
     * @var string
     */
    public $attrs;

    /**
     * @example 23425
     *
     * @var string
     */
    public $callerBid;

    /**
     * @example 35645
     *
     * @var int
     */
    public $callerUid;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $expireTime;

    /**
     * @example name
     *
     * @var string
     */
    public $fullName;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example username
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'attrs'          => 'Attrs',
        'callerBid'      => 'CallerBid',
        'callerUid'      => 'CallerUid',
        'createTime'     => 'CreateTime',
        'expireTime'     => 'ExpireTime',
        'fullName'       => 'FullName',
        'organizationId' => 'OrganizationId',
        'regionId'       => 'RegionId',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrs) {
            $res['Attrs'] = $this->attrs;
        }
        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attrs'])) {
            $model->attrs = $map['Attrs'];
        }
        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
