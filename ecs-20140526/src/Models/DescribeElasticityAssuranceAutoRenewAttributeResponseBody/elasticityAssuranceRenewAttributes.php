<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes\elasticityAssuranceRenewAttribute;

class elasticityAssuranceRenewAttributes extends Model
{
    /**
     * @var elasticityAssuranceRenewAttribute[]
     */
    public $elasticityAssuranceRenewAttribute;
    protected $_name = [
        'elasticityAssuranceRenewAttribute' => 'ElasticityAssuranceRenewAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->elasticityAssuranceRenewAttribute)) {
            Model::validateArray($this->elasticityAssuranceRenewAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticityAssuranceRenewAttribute) {
            if (\is_array($this->elasticityAssuranceRenewAttribute)) {
                $res['ElasticityAssuranceRenewAttribute'] = [];
                $n1                                       = 0;
                foreach ($this->elasticityAssuranceRenewAttribute as $item1) {
                    $res['ElasticityAssuranceRenewAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ElasticityAssuranceRenewAttribute'])) {
            if (!empty($map['ElasticityAssuranceRenewAttribute'])) {
                $model->elasticityAssuranceRenewAttribute = [];
                $n1                                       = 0;
                foreach ($map['ElasticityAssuranceRenewAttribute'] as $item1) {
                    $model->elasticityAssuranceRenewAttribute[$n1++] = elasticityAssuranceRenewAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
