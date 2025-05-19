<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\NodeProcessesResponseBody\nodeProcesses\nodeProcess;

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
        if (\is_array($this->nodeProcess)) {
            Model::validateArray($this->nodeProcess);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeProcess) {
            if (\is_array($this->nodeProcess)) {
                $res['NodeProcess'] = [];
                $n1 = 0;
                foreach ($this->nodeProcess as $item1) {
                    $res['NodeProcess'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeProcess'])) {
            if (!empty($map['NodeProcess'])) {
                $model->nodeProcess = [];
                $n1 = 0;
                foreach ($map['NodeProcess'] as $item1) {
                    $model->nodeProcess[$n1++] = nodeProcess::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
