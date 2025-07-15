<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeTemplateResponseBody\templateList;
use AlibabaCloud\Tea\Model;

class ListEdgeTranscodeTemplateResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example ******3B-0E1A-586A-AC29-742247******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the edge transcoding templates.
     *
     * @var templateList
     */
    public $templateList;

    /**
     * @description The total number of templates returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'templateList' => 'TemplateList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateList) {
            $res['TemplateList'] = null !== $this->templateList ? $this->templateList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeTranscodeTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateList'])) {
            $model->templateList = templateList::fromMap($map['TemplateList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
