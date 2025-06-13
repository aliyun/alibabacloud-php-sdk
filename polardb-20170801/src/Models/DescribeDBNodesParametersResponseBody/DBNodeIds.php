<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBNodesParametersResponseBody\DBNodeIds\runningParameters;

class DBNodeIds extends Model
{
    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var runningParameters[]
     */
    public $runningParameters;
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'runningParameters' => 'RunningParameters',
    ];

    public function validate()
    {
        if (\is_array($this->runningParameters)) {
            Model::validateArray($this->runningParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->runningParameters) {
            if (\is_array($this->runningParameters)) {
                $res['RunningParameters'] = [];
                $n1 = 0;
                foreach ($this->runningParameters as $item1) {
                    $res['RunningParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['RunningParameters'])) {
            if (!empty($map['RunningParameters'])) {
                $model->runningParameters = [];
                $n1 = 0;
                foreach ($map['RunningParameters'] as $item1) {
                    $model->runningParameters[$n1] = runningParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
