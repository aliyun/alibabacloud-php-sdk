<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes;

class DescribeElasticityAssuranceAutoRenewAttributeResponseBody extends Model
{
    /**
     * @var elasticityAssuranceRenewAttributes
     */
    public $elasticityAssuranceRenewAttributes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticityAssuranceRenewAttributes' => 'ElasticityAssuranceRenewAttributes',
        'requestId'                          => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->elasticityAssuranceRenewAttributes) {
            $this->elasticityAssuranceRenewAttributes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticityAssuranceRenewAttributes) {
            $res['ElasticityAssuranceRenewAttributes'] = null !== $this->elasticityAssuranceRenewAttributes ? $this->elasticityAssuranceRenewAttributes->toArray($noStream) : $this->elasticityAssuranceRenewAttributes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ElasticityAssuranceRenewAttributes'])) {
            $model->elasticityAssuranceRenewAttributes = elasticityAssuranceRenewAttributes::fromMap($map['ElasticityAssuranceRenewAttributes']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
