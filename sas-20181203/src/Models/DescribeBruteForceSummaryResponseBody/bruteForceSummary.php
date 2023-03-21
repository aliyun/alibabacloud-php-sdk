<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeBruteForceSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class bruteForceSummary extends Model
{
    /**
     * @var int
     */
    public $allStrategyCount;

    /**
     * @var int
     */
    public $effectiveCount;
    protected $_name = [
        'allStrategyCount' => 'AllStrategyCount',
        'effectiveCount'   => 'EffectiveCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allStrategyCount) {
            $res['AllStrategyCount'] = $this->allStrategyCount;
        }
        if (null !== $this->effectiveCount) {
            $res['EffectiveCount'] = $this->effectiveCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bruteForceSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllStrategyCount'])) {
            $model->allStrategyCount = $map['AllStrategyCount'];
        }
        if (isset($map['EffectiveCount'])) {
            $model->effectiveCount = $map['EffectiveCount'];
        }

        return $model;
    }
}
