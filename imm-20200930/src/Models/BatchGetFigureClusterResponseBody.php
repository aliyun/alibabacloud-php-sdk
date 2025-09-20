<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class BatchGetFigureClusterResponseBody extends Model
{
    /**
     * @var FigureCluster[]
     */
    public $figureClusters;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'figureClusters' => 'FigureClusters',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->figureClusters)) {
            Model::validateArray($this->figureClusters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figureClusters) {
            if (\is_array($this->figureClusters)) {
                $res['FigureClusters'] = [];
                $n1 = 0;
                foreach ($this->figureClusters as $item1) {
                    $res['FigureClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FigureClusters'])) {
            if (!empty($map['FigureClusters'])) {
                $model->figureClusters = [];
                $n1 = 0;
                foreach ($map['FigureClusters'] as $item1) {
                    $model->figureClusters[$n1] = FigureCluster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
