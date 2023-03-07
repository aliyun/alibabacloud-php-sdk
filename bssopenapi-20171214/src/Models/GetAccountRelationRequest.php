<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class GetAccountRelationRequest extends Model
{
    /**
     * @description The ID of the financial relationship.
     *
     * @example Value returned by calling the AddAccountRelation operation
     *
     * @var int
     */
    public $relationId;

    /**
     * @description The unique ID of the request. The ID is used to mark a request and troubleshoot a problem.
     *
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'relationId' => 'RelationId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
