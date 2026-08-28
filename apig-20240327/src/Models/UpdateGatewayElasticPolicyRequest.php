<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayElasticPolicyRequest\elasticPolicy;

class UpdateGatewayElasticPolicyRequest extends Model
{
    /**
     * @var elasticPolicy
     */
    public $elasticPolicy;
    protected $_name = [
        'elasticPolicy' => 'elasticPolicy',
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

        return $model;
    }
}
