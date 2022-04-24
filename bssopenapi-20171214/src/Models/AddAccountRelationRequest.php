<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class AddAccountRelationRequest extends Model
{
    /**
     * @var string
     */
    public $childNick;

    /**
     * @var int
     */
    public $childUserId;

    /**
     * @var int
     */
    public $parentUserId;

    /**
     * @var string[]
     */
    public $permissionCodes;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $roleCodes;
    protected $_name = [
        'childNick'       => 'ChildNick',
        'childUserId'     => 'ChildUserId',
        'parentUserId'    => 'ParentUserId',
        'permissionCodes' => 'PermissionCodes',
        'relationType'    => 'RelationType',
        'requestId'       => 'RequestId',
        'roleCodes'       => 'RoleCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childNick) {
            $res['ChildNick'] = $this->childNick;
        }
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->roleCodes) {
            $res['RoleCodes'] = $this->roleCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddAccountRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildNick'])) {
            $model->childNick = $map['ChildNick'];
        }
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = $map['PermissionCodes'];
            }
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = $map['RoleCodes'];
            }
        }

        return $model;
    }
}
