<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataServiceRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $conditions;

    /**
     * @var string
     */
    public $returnFields;
    protected $_name = [
        'apiId'        => 'ApiId',
        'conditions'   => 'Conditions',
        'returnFields' => 'ReturnFields',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDataServiceRequest
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

        return $model;
    }
}
