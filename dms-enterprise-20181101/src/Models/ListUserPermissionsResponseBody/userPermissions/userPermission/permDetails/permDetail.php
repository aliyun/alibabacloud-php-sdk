<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListUserPermissionsResponseBody\userPermissions\userPermission\permDetails;

use AlibabaCloud\Dara\Model;

class permDetail extends Model
{
    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var string
     */
    public $extraData;

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
    public $userAccessId;
    protected $_name = [
        'createDate' => 'CreateDate',
        'expireDate' => 'ExpireDate',
        'extraData' => 'ExtraData',
        'originFrom' => 'OriginFrom',
        'permType' => 'PermType',
        'userAccessId' => 'UserAccessId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }

        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }

        if (null !== $this->originFrom) {
            $res['OriginFrom'] = $this->originFrom;
        }

        if (null !== $this->permType) {
            $res['PermType'] = $this->permType;
        }

        if (null !== $this->userAccessId) {
            $res['UserAccessId'] = $this->userAccessId;
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
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }

        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        if (isset($map['OriginFrom'])) {
            $model->originFrom = $map['OriginFrom'];
        }

        if (isset($map['PermType'])) {
            $model->permType = $map['PermType'];
        }

        if (isset($map['UserAccessId'])) {
            $model->userAccessId = $map['UserAccessId'];
        }

        return $model;
    }
}
