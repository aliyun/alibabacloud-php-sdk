<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppLayoutsResponseBody\layouts;
use AlibabaCloud\Tea\Model;

class DescribeAppLayoutsResponseBody extends Model
{
    /**
     * @var layouts[]
     */
    public $layouts;

    /**
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalNum;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'layouts' => 'Layouts',
        'requestId' => 'RequestId',
        'totalNum' => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->layouts) {
            $res['Layouts'] = [];
            if (null !== $this->layouts && \is_array($this->layouts)) {
                $n = 0;
                foreach ($this->layouts as $item) {
                    $res['Layouts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppLayoutsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layouts'])) {
            if (!empty($map['Layouts'])) {
                $model->layouts = [];
                $n = 0;
                foreach ($map['Layouts'] as $item) {
                    $model->layouts[$n++] = null !== $item ? layouts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
