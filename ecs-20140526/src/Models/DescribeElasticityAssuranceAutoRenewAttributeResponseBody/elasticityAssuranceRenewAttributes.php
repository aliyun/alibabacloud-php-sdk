<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssuranceAutoRenewAttributeResponseBody\elasticityAssuranceRenewAttributes\elasticityAssuranceRenewAttribute;
use AlibabaCloud\Tea\Model;

class elasticityAssuranceRenewAttributes extends Model
{
    /**
     * @var elasticityAssuranceRenewAttribute[]
     */
    public $elasticityAssuranceRenewAttribute;
    protected $_name = [
        'elasticityAssuranceRenewAttribute' => 'ElasticityAssuranceRenewAttribute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticityAssuranceRenewAttribute) {
            $res['ElasticityAssuranceRenewAttribute'] = [];
            if (null !== $this->elasticityAssuranceRenewAttribute && \is_array($this->elasticityAssuranceRenewAttribute)) {
                $n = 0;
                foreach ($this->elasticityAssuranceRenewAttribute as $item) {
                    $res['ElasticityAssuranceRenewAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticityAssuranceRenewAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticityAssuranceRenewAttribute'])) {
            if (!empty($map['ElasticityAssuranceRenewAttribute'])) {
                $model->elasticityAssuranceRenewAttribute = [];
                $n = 0;
                foreach ($map['ElasticityAssuranceRenewAttribute'] as $item) {
                    $model->elasticityAssuranceRenewAttribute[$n++] = null !== $item ? elasticityAssuranceRenewAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
