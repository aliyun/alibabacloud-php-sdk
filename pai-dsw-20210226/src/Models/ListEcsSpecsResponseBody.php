<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListEcsSpecsResponseBody extends Model
{
    /**
     * @description 请求ecs规格列表
     *
     * @var EcsSpec[]
     */
    public $ecsSpecs;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 符合要求的ecs规格数量
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ecsSpecs'   => 'EcsSpecs',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsSpecs) {
            $res['EcsSpecs'] = [];
            if (null !== $this->ecsSpecs && \is_array($this->ecsSpecs)) {
                $n = 0;
                foreach ($this->ecsSpecs as $item) {
                    $res['EcsSpecs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListEcsSpecsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsSpecs'])) {
            if (!empty($map['EcsSpecs'])) {
                $model->ecsSpecs = [];
                $n               = 0;
                foreach ($map['EcsSpecs'] as $item) {
                    $model->ecsSpecs[$n++] = null !== $item ? EcsSpec::fromMap($item) : $item;
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
