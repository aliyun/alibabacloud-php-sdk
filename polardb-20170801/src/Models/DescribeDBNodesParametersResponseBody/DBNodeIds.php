<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds\runningParameters;
use AlibabaCloud\Tea\Model;

class DBNodeIds extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example pi-bp1r4qe3s534*****
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description The parameters of the current node.
     *
     * @var runningParameters[]
     */
    public $runningParameters;
    protected $_name = [
        'DBNodeId'          => 'DBNodeId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->runningParameters) {
            $res['RunningParameters'] = [];
            if (null !== $this->runningParameters && \is_array($this->runningParameters)) {
                $n = 0;
                foreach ($this->runningParameters as $item) {
                    $res['RunningParameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['RunningParameters'])) {
            if (!empty($map['RunningParameters'])) {
                $model->runningParameters = [];
                $n                        = 0;
                foreach ($map['RunningParameters'] as $item) {
                    $model->runningParameters[$n++] = null !== $item ? runningParameters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
