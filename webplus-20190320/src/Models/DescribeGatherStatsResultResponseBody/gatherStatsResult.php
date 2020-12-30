<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultResponseBody\gatherStatsResult\change;
use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeGatherStatsResultResponseBody\gatherStatsResult\instanceResults;
use AlibabaCloud\Tea\Model;

class gatherStatsResult extends Model
{
    /**
     * @var change
     */
    public $change;

    /**
     * @var instanceResults
     */
    public $instanceResults;
    protected $_name = [
        'change'          => 'Change',
        'instanceResults' => 'InstanceResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->change) {
            $res['Change'] = null !== $this->change ? $this->change->toMap() : null;
        }
        if (null !== $this->instanceResults) {
            $res['InstanceResults'] = null !== $this->instanceResults ? $this->instanceResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gatherStatsResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Change'])) {
            $model->change = change::fromMap($map['Change']);
        }
        if (isset($map['InstanceResults'])) {
            $model->instanceResults = instanceResults::fromMap($map['InstanceResults']);
        }

        return $model;
    }
}
