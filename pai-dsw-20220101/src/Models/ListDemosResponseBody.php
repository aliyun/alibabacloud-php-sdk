<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListDemosResponseBody\demos;
use AlibabaCloud\Tea\Model;

class ListDemosResponseBody extends Model
{
    /**
     * @description 样例列表
     *
     * @var demos[]
     */
    public $demos;

    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'demos'      => 'Demos',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demos) {
            $res['Demos'] = [];
            if (null !== $this->demos && \is_array($this->demos)) {
                $n = 0;
                foreach ($this->demos as $item) {
                    $res['Demos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDemosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Demos'])) {
            if (!empty($map['Demos'])) {
                $model->demos = [];
                $n            = 0;
                foreach ($map['Demos'] as $item) {
                    $model->demos[$n++] = null !== $item ? demos::fromMap($item) : $item;
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
