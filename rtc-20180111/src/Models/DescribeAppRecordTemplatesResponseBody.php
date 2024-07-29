<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAppRecordTemplatesResponseBody\templates;
use AlibabaCloud\Tea\Model;

class DescribeAppRecordTemplatesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 2A7497D0-BEAE-58E7-B13A-751BD8EAE4C6
     *
     * @var string
     */
    public $requestId;

    /**
     * @var templates[]
     */
    public $templates;

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
        'requestId' => 'RequestId',
        'templates' => 'Templates',
        'totalNum'  => 'TotalNum',
        'totalPage' => 'TotalPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['Templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeAppRecordTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['Templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
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
