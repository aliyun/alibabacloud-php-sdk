<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceRuleItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceRuleItemId;
    protected $_name = [
        'requestId'          => 'RequestId',
        'resourceRuleItemId' => 'ResourceRuleItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceRuleItemId) {
            $res['ResourceRuleItemId'] = $this->resourceRuleItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceRuleItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRuleItemId'])) {
            $model->resourceRuleItemId = $map['ResourceRuleItemId'];
        }

        return $model;
    }
}
