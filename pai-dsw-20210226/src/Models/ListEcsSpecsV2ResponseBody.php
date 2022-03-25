<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListEcsSpecsV2ResponseBody\ecsSpecs;
use AlibabaCloud\Tea\Model;

class ListEcsSpecsV2ResponseBody extends Model
{
    /**
     * @description 本分页中请求的实例列表
     *
     * @var ecsSpecs[]
     */
    public $ecsSpecs;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 实例总数
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
     * @return ListEcsSpecsV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsSpecs'])) {
            if (!empty($map['EcsSpecs'])) {
                $model->ecsSpecs = [];
                $n               = 0;
                foreach ($map['EcsSpecs'] as $item) {
                    $model->ecsSpecs[$n++] = null !== $item ? ecsSpecs::fromMap($item) : $item;
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
