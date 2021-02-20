<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts;
use AlibabaCloud\Tea\Model;

class DescribeMPULayoutInfoListResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalNum;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layouts
     */
    public $layouts;
    protected $_name = [
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
        'requestId' => 'RequestId',
        'layouts'   => 'Layouts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->layouts) {
            $res['Layouts'] = null !== $this->layouts ? $this->layouts->toMap() : null;
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
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Layouts'])) {
            $model->layouts = layouts::fromMap($map['Layouts']);
        }

        return $model;
    }
}
