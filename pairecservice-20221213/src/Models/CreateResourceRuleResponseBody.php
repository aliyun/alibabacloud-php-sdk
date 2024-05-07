<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceRuleId;
    protected $_name = [
        'requestId'      => 'RequestId',
        'resourceRuleId' => 'ResourceRuleId',
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
        if (null !== $this->resourceRuleId) {
            $res['ResourceRuleId'] = $this->resourceRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRuleId'])) {
            $model->resourceRuleId = $map['ResourceRuleId'];
        }

        return $model;
    }
}
