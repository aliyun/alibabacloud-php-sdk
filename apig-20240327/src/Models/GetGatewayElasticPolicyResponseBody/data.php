<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayElasticPolicyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetGatewayElasticPolicyResponseBody\data\elasticPolicy;

class data extends Model
{
    /**
     * @var elasticPolicy
     */
    public $elasticPolicy;

    /**
     * @var string
     */
    public $elasticStrategyId;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var string
     */
    public $gatewayId;
    protected $_name = [
        'elasticPolicy' => 'elasticPolicy',
        'elasticStrategyId' => 'elasticStrategyId',
        'elasticType' => 'elasticType',
        'gatewayId' => 'gatewayId',
    ];

    public function validate()
    {
        if (null !== $this->elasticPolicy) {
            $this->elasticPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticPolicy) {
            $res['elasticPolicy'] = null !== $this->elasticPolicy ? $this->elasticPolicy->toArray($noStream) : $this->elasticPolicy;
        }

        if (null !== $this->elasticStrategyId) {
            $res['elasticStrategyId'] = $this->elasticStrategyId;
        }

        if (null !== $this->elasticType) {
            $res['elasticType'] = $this->elasticType;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
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
        if (isset($map['elasticPolicy'])) {
            $model->elasticPolicy = elasticPolicy::fromMap($map['elasticPolicy']);
        }

        if (isset($map['elasticStrategyId'])) {
            $model->elasticStrategyId = $map['elasticStrategyId'];
        }

        if (isset($map['elasticType'])) {
            $model->elasticType = $map['elasticType'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        return $model;
    }
}
