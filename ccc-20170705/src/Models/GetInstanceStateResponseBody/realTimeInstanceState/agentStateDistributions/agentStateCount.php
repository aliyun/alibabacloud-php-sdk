<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetInstanceStateResponseBody\realTimeInstanceState\agentStateDistributions;

use AlibabaCloud\Tea\Model;

class agentStateCount extends Model
{
    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'state' => 'State',
        'count' => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentStateCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
