<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentStatusesResponseBody\nodeStatusList\nodeStatus;

class nodeStatusList extends Model
{
    /**
     * @var nodeStatus[]
     */
    public $nodeStatus;
    protected $_name = [
        'nodeStatus' => 'NodeStatus',
    ];

    public function validate()
    {
        if (\is_array($this->nodeStatus)) {
            Model::validateArray($this->nodeStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeStatus) {
            if (\is_array($this->nodeStatus)) {
                $res['NodeStatus'] = [];
                $n1 = 0;
                foreach ($this->nodeStatus as $item1) {
                    $res['NodeStatus'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeStatus'])) {
            if (!empty($map['NodeStatus'])) {
                $model->nodeStatus = [];
                $n1 = 0;
                foreach ($map['NodeStatus'] as $item1) {
                    $model->nodeStatus[$n1] = nodeStatus::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
