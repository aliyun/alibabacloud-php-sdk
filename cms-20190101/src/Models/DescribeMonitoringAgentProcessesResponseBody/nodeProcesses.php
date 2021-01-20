<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitoringAgentProcessesResponseBody\nodeProcesses\nodeProcess;
use AlibabaCloud\Tea\Model;

class nodeProcesses extends Model
{
    /**
     * @var nodeProcess[]
     */
    public $nodeProcess;
    protected $_name = [
        'nodeProcess' => 'NodeProcess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeProcess) {
            $res['NodeProcess'] = [];
            if (null !== $this->nodeProcess && \is_array($this->nodeProcess)) {
                $n = 0;
                foreach ($this->nodeProcess as $item) {
                    $res['NodeProcess'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeProcesses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeProcess'])) {
            if (!empty($map['NodeProcess'])) {
                $model->nodeProcess = [];
                $n                  = 0;
                foreach ($map['NodeProcess'] as $item) {
                    $model->nodeProcess[$n++] = null !== $item ? nodeProcess::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
