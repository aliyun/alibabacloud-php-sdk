<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example f4cc43bc3***
     *
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $conditions;

    /**
     * @example ["area", "city", "price", "date"]
     *
     * @var string
     */
    public $returnFields;

    /**
     * @example b5d8fd9348cc4327****afb604
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiId'        => 'ApiId',
        'conditions'   => 'Conditions',
        'returnFields' => 'ReturnFields',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->returnFields) {
            $res['ReturnFields'] = $this->returnFields;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
        }
        if (isset($map['ReturnFields'])) {
            $model->returnFields = $map['ReturnFields'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
