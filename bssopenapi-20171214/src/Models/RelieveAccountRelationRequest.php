<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RelieveAccountRelationRequest extends Model
{
    /**
     * @example 1512996702208737
     *
     * @var int
     */
    public $childUserId;

    /**
     * @example 1738376485192612
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @example RelationId
     *
     * @var int
     */
    public $relationId;

    /**
     * @example enterprise_group
     *
     * @var string
     */
    public $relationType;

    /**
     * @example request_id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'childUserId'  => 'ChildUserId',
        'parentUserId' => 'ParentUserId',
        'relationId'   => 'RelationId',
        'relationType' => 'RelationType',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->childUserId) {
            $res['ChildUserId'] = $this->childUserId;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
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

    /**
     * @param array $map
     *
     * @return RelieveAccountRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChildUserId'])) {
            $model->childUserId = $map['ChildUserId'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
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
