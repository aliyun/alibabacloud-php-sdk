<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeQuotaPlanRequest\quota;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The value of elastic Reserved CUs in the level-1 quota.
     * > The default value is 0. The maximum value of this parameter must be equal to the number of subscription-based reserved CUs and cannot exceed 10,000 CUs.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $elasticReservedCU;
    protected $_name = [
        'elasticReservedCU' => 'elasticReservedCU',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticReservedCU) {
            $res['elasticReservedCU'] = $this->elasticReservedCU;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['elasticReservedCU'])) {
            $model->elasticReservedCU = $map['elasticReservedCU'];
        }

        return $model;
    }
}
