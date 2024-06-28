<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RelieveAccountRelationRequest extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account that is used as the member. You must set the RelationId parameter or all of the ParentUserId, ChildUserId, and RelationType parameters.
     *
     * @example 1512996702208737
     *
     * @var int
     */
    public $childUserId;

    /**
     * @description The ID of the Alibaba Cloud account that is used as the management account. You must set the RelationId parameter or all of the ParentUserId, ChildUserId, and RelationType parameters.
     *
     * @example 1738376485192612
     *
     * @var int
     */
    public $parentUserId;

    /**
     * @description The ID of the financial relationship between the management account and the member. You must set the RelationId parameter or all of the ParentUserId, ChildUserId, and RelationType parameters.
     *
     * @example RelationId
     *
     * @var int
     */
    public $relationId;

    /**
     * @description The type of the financial relationship. Set the value to enterprise_group.
     *
     * @example enterprise_group
     *
     * @var string
     */
    public $relationType;

    /**
     * @description The unique ID of the request. The ID is used to mark a request and troubleshoot a problem.
     *
     * This parameter is required.
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
