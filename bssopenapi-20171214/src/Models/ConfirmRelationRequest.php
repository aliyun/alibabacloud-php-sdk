<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class ConfirmRelationRequest extends Model
{
    /**
     * @var string
     */
    public $relationType;

    /**
     * @var int
     */
    public $parentUserId;

    /**
     * @var string
     */
    public $confirmCode;

    /**
     * @var int
     */
    public $childUserId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $permissionCodes;
    protected $_name = [
        'relationType'    => 'RelationType',
        'parentUserId'    => 'ParentUserId',
        'confirmCode'     => 'ConfirmCode',
        'childUserId'     => 'ChildUserId',
        'requestId'       => 'RequestId',
        'permissionCodes' => 'PermissionCodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->confirmCode) {
            $res['ConfirmCode'] = $this->confirmCode;
        }
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->permissionCodes) {
            $res['PermissionCodes'] = $this->permissionCodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['ConfirmCode'])) {
            $model->confirmCode = $map['ConfirmCode'];
        }
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = $map['PermissionCodes'];
            }
        }

        return $model;
    }
}
