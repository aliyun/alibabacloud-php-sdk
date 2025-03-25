<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota\subQuotaInfoList;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @description The value of elastic Reserved CUs.
     * > The total number of elastically reserved CUs in all the level-2 quotas is equal to the number of elastically reserved CUs in the level-1 quota.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $elasticReservedCU;

    /**
     * @description The value of maxCU in Reserved CUs.
     * > The value of maxCU must be less than or equal to the value of maxCU in the level-1 quota that you purchased.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $maxCU;

    /**
     * @description The value of minCU in Reserved CUs.
     * >
     * >- The total value of minCU in all the level-2 quotas is equal to the value of minCU in the level-1 quota.
     * >- The value of minCU must be less than or equal to the value of maxCU in the level-2 quota and less than or equal to the value of minCU in the level-1 quota that you purchased.
     *
     * This parameter is required.
     *
     * @example 50
     *
     * @var int
     */
    public $minCU;
    protected $_name = [
        'elasticReservedCU' => 'elasticReservedCU',
        'maxCU' => 'maxCU',
        'minCU' => 'minCU',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticReservedCU) {
            $res['elasticReservedCU'] = $this->elasticReservedCU;
        }
        if (null !== $this->maxCU) {
            $res['maxCU'] = $this->maxCU;
        }
        if (null !== $this->minCU) {
            $res['minCU'] = $this->minCU;
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
        if (isset($map['maxCU'])) {
            $model->maxCU = $map['maxCU'];
        }
        if (isset($map['minCU'])) {
            $model->minCU = $map['minCU'];
        }

        return $model;
    }
}
