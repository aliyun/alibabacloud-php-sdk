<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\links\hops;

class links extends Model
{
    /**
     * @var string
     */
    public $error;

    /**
     * @var int
     */
    public $fromNode;

    /**
     * @var hops[]
     */
    public $hops;

    /**
     * @var string
     */
    public $latency;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $toNode;
    protected $_name = [
        'error' => 'Error',
        'fromNode' => 'FromNode',
        'hops' => 'Hops',
        'latency' => 'Latency',
        'success' => 'Success',
        'toNode' => 'ToNode',
    ];

    public function validate()
    {
        if (\is_array($this->hops)) {
            Model::validateArray($this->hops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->fromNode) {
            $res['FromNode'] = $this->fromNode;
        }

        if (null !== $this->hops) {
            if (\is_array($this->hops)) {
                $res['Hops'] = [];
                $n1 = 0;
                foreach ($this->hops as $item1) {
                    $res['Hops'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->toNode) {
            $res['ToNode'] = $this->toNode;
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
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['FromNode'])) {
            $model->fromNode = $map['FromNode'];
        }

        if (isset($map['Hops'])) {
            if (!empty($map['Hops'])) {
                $model->hops = [];
                $n1 = 0;
                foreach ($map['Hops'] as $item1) {
                    $model->hops[$n1] = hops::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['ToNode'])) {
            $model->toNode = $map['ToNode'];
        }

        return $model;
    }
}
