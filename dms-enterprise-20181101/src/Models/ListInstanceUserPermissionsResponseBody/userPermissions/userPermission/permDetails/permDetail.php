<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListInstanceUserPermissionsResponseBody\userPermissions\userPermission\permDetails;

use AlibabaCloud\Tea\Model;

class permDetail extends Model
{
    /**
     * @var string
     */
    public $originFrom;

    /**
     * @var string
     */
    public $permType;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $userAccessId;

    /**
     * @var string
     */
    public $extraData;
    protected $_name = [
        'originFrom'   => 'OriginFrom',
        'permType'     => 'PermType',
        'expireDate'   => 'ExpireDate',
        'createDate'   => 'CreateDate',
        'userAccessId' => 'UserAccessId',
        'extraData'    => 'ExtraData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originFrom) {
            $res['OriginFrom'] = $this->originFrom;
        }
        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginFrom'])) {
            $model->originFrom = $map['OriginFrom'];
        }
        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
