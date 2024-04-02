<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeCustomOcrTemplateResponseBody\ocrTemplateList;
use AlibabaCloud\Tea\Model;

class DescribeCustomOcrTemplateResponseBody extends Model
{
    /**
     * @var ocrTemplateList[]
     */
    public $ocrTemplateList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ocrTemplateList' => 'OcrTemplateList',
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ocrTemplateList) {
            $res['OcrTemplateList'] = [];
            if (null !== $this->ocrTemplateList && \is_array($this->ocrTemplateList)) {
                $n = 0;
                foreach ($this->ocrTemplateList as $item) {
                    $res['OcrTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCustomOcrTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OcrTemplateList'])) {
            if (!empty($map['OcrTemplateList'])) {
                $model->ocrTemplateList = [];
                $n                      = 0;
                foreach ($map['OcrTemplateList'] as $item) {
                    $model->ocrTemplateList[$n++] = null !== $item ? ocrTemplateList::fromMap($item) : $item;
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
