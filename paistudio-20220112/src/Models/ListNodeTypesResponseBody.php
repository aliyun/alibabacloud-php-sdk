<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListNodeTypesResponseBody extends Model
{
    /**
     * @var NodeType[]
     */
    public $nodeTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var NodeTypeStatistic[]
     */
    public $statistics;
    protected $_name = [
        'nodeTypes' => 'NodeTypes',
        'requestId' => 'RequestId',
        'statistics' => 'Statistics',
    ];

    public function validate()
    {
        if (\is_array($this->nodeTypes)) {
            Model::validateArray($this->nodeTypes);
        }
        if (\is_array($this->statistics)) {
            Model::validateArray($this->statistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeTypes) {
            if (\is_array($this->nodeTypes)) {
                $res['NodeTypes'] = [];
                $n1 = 0;
                foreach ($this->nodeTypes as $item1) {
                    $res['NodeTypes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->statistics) {
            if (\is_array($this->statistics)) {
                $res['Statistics'] = [];
                $n1 = 0;
                foreach ($this->statistics as $item1) {
                    $res['Statistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NodeTypes'])) {
            if (!empty($map['NodeTypes'])) {
                $model->nodeTypes = [];
                $n1 = 0;
                foreach ($map['NodeTypes'] as $item1) {
                    $model->nodeTypes[$n1] = NodeType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Statistics'])) {
            if (!empty($map['Statistics'])) {
                $model->statistics = [];
                $n1 = 0;
                foreach ($map['Statistics'] as $item1) {
                    $model->statistics[$n1] = NodeTypeStatistic::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
