<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingProjectInstancesResponseBody\renderingInstances;

class ListRenderingProjectInstancesResponseBody extends Model
{
    /**
     * @var renderingInstances[]
     */
    public $renderingInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'renderingInstances' => 'RenderingInstances',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->renderingInstances)) {
            Model::validateArray($this->renderingInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->renderingInstances) {
            if (\is_array($this->renderingInstances)) {
                $res['RenderingInstances'] = [];
                $n1 = 0;
                foreach ($this->renderingInstances as $item1) {
                    $res['RenderingInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RenderingInstances'])) {
            if (!empty($map['RenderingInstances'])) {
                $model->renderingInstances = [];
                $n1 = 0;
                foreach ($map['RenderingInstances'] as $item1) {
                    $model->renderingInstances[$n1] = renderingInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
