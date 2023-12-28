<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts;
use AlibabaCloud\Tea\Model;

class DescribeMPULayoutInfoListResponseBody extends Model
{
    /**
     * @var layouts
     */
    public $layouts;

    /**
     * @example 760bad53276431c499e30dc36f6b26be
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
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
        'layouts'   => 'Layouts',
        'requestId' => 'RequestId',
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layouts) {
            $res['Layouts'] = null !== $this->layouts ? $this->layouts->toMap() : null;
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
     * @return DescribeMPULayoutInfoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layouts'])) {
            $model->layouts = layouts::fromMap($map['Layouts']);
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
