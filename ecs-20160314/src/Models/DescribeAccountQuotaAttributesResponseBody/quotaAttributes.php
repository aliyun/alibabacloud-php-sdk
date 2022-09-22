<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeAccountQuotaAttributesResponseBody;

use AlibabaCloud\Tea\Model;

class quotaAttributes extends Model
{
    /**
     * @var bool
     */
    public $ecsElasticQuotaEnable;
    protected $_name = [
        'ecsElasticQuotaEnable' => 'EcsElasticQuotaEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsElasticQuotaEnable) {
            $res['EcsElasticQuotaEnable'] = $this->ecsElasticQuotaEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quotaAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsElasticQuotaEnable'])) {
            $model->ecsElasticQuotaEnable = $map['EcsElasticQuotaEnable'];
        }

        return $model;
    }
}
