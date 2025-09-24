<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class ConfirmRelationRequest extends Model
{
    /**
     * @var int
     */
    public $childUserId;

    /**
     * @var string
     */
    public $confirmCode;

    /**
     * @var int
     */
    public $parentUserId;

    /**
     * @var string[]
     */
    public $permissionCodes;

    /**
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'childUserId' => 'ChildUserId',
        'confirmCode' => 'ConfirmCode',
        'parentUserId' => 'ParentUserId',
        'permissionCodes' => 'PermissionCodes',
        'relationId' => 'RelationId',
        'relationType' => 'RelationType',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->permissionCodes)) {
            Model::validateArray($this->permissionCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }

        if (null !== $this->confirmCode) {
            $res['ConfirmCode'] = $this->confirmCode;
        }

        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }

        if (null !== $this->permissionCodes) {
            if (\is_array($this->permissionCodes)) {
                $res['PermissionCodes'] = [];
                $n1 = 0;
                foreach ($this->permissionCodes as $item1) {
                    $res['PermissionCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }

        if (isset($map['ConfirmCode'])) {
            $model->confirmCode = $map['ConfirmCode'];
        }

        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }

        if (isset($map['PermissionCodes'])) {
            if (!empty($map['PermissionCodes'])) {
                $model->permissionCodes = [];
                $n1 = 0;
                foreach ($map['PermissionCodes'] as $item1) {
                    $model->permissionCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
