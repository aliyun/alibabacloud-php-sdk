<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeElasticityAssurancesRequest;

use AlibabaCloud\Tea\Model;

class privatePoolOptions extends Model
{
    /**
     * @description The IDs of elasticity assurances. The value can be a JSON array that consists of up to 100 elasticity assurance IDs. Separate the IDs with commas (,).
     *
     * @example ["eap-bp67acfmxazb4****", "eap-bp67acfmxazb5****"]
     *
     * @var string
     */
    public $ids;
    protected $_name = [
        'ids' => 'Ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privatePoolOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        return $model;
    }
}
