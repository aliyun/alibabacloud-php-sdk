<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes;
use AlibabaCloud\Tea\Model;

class DescribeElasticityAssuranceAutoRenewAttributeResponseBody extends Model
{
    /**
     * @description The auto-renewal attribute of the elasticity assurances.
     *
     * @var elasticityAssuranceRenewAttributes
     */
    public $elasticityAssuranceRenewAttributes;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticityAssuranceRenewAttributes' => 'ElasticityAssuranceRenewAttributes',
        'requestId'                          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticityAssuranceRenewAttributes) {
            $res['ElasticityAssuranceRenewAttributes'] = null !== $this->elasticityAssuranceRenewAttributes ? $this->elasticityAssuranceRenewAttributes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticityAssuranceAutoRenewAttributeResponseBody
     */
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
