<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Dara\Model;

class ModifyAccountRelationRequest extends Model
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
     * @var int
     */
    public $relationId;

    /**
     * @var string
     */
    public $relationOperation;

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
        'childNick' => 'ChildNick',
        'childUserId' => 'ChildUserId',
        'parentUserId' => 'ParentUserId',
        'permissionCodes' => 'PermissionCodes',
        'relationId' => 'RelationId',
        'relationOperation' => 'RelationOperation',
        'relationType' => 'RelationType',
        'requestId' => 'RequestId',
        'roleCodes' => 'RoleCodes',
    ];

    public function validate()
    {
        if (\is_array($this->permissionCodes)) {
            Model::validateArray($this->permissionCodes);
        }
        if (\is_array($this->roleCodes)) {
            Model::validateArray($this->roleCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->relationOperation) {
            $res['RelationOperation'] = $this->relationOperation;
        }

        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roleCodes) {
            if (\is_array($this->roleCodes)) {
                $res['RoleCodes'] = [];
                $n1 = 0;
                foreach ($this->roleCodes as $item1) {
                    $res['RoleCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['RelationOperation'])) {
            $model->relationOperation = $map['RelationOperation'];
        }

        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoleCodes'])) {
            if (!empty($map['RoleCodes'])) {
                $model->roleCodes = [];
                $n1 = 0;
                foreach ($map['RoleCodes'] as $item1) {
                    $model->roleCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
