<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationUsersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $attrs;

    /**
     * @var string
     */
    public $callerBid;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var int
     */
    public $callerUid;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'expireTime'     => 'ExpireTime',
        'attrs'          => 'Attrs',
        'callerBid'      => 'CallerBid',
        'createTime'     => 'CreateTime',
        'fullName'       => 'FullName',
        'callerUid'      => 'CallerUid',
        'username'       => 'Username',
        'organizationId' => 'OrganizationId',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->attrs) {
            $res['Attrs'] = $this->attrs;
        }
        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fullName) {
            $res['FullName'] = $this->fullName;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['Attrs'])) {
            $model->attrs = $map['Attrs'];
        }
        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FullName'])) {
            $model->fullName = $map['FullName'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
