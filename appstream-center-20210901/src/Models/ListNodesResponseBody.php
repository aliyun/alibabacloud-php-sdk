<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodesResponseBody\nodeModels;

class ListNodesResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var nodeModels[]
     */
    public $nodeModels;

    /**
     * @var int
     */
    public $perPageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $toPage;
    protected $_name = [
        'count' => 'Count',
        'nodeModels' => 'NodeModels',
        'perPageSize' => 'PerPageSize',
        'requestId' => 'RequestId',
        'toPage' => 'ToPage',
    ];

    public function validate()
    {
        if (\is_array($this->nodeModels)) {
            Model::validateArray($this->nodeModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->nodeModels) {
            if (\is_array($this->nodeModels)) {
                $res['NodeModels'] = [];
                $n1 = 0;
                foreach ($this->nodeModels as $item1) {
                    $res['NodeModels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->perPageSize) {
            $res['PerPageSize'] = $this->perPageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->toPage) {
            $res['ToPage'] = $this->toPage;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['NodeModels'])) {
            if (!empty($map['NodeModels'])) {
                $model->nodeModels = [];
                $n1 = 0;
                foreach ($map['NodeModels'] as $item1) {
                    $model->nodeModels[$n1] = nodeModels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PerPageSize'])) {
            $model->perPageSize = $map['PerPageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ToPage'])) {
            $model->toPage = $map['ToPage'];
        }

        return $model;
    }
}
