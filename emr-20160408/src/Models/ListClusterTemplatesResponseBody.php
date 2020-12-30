<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListClusterTemplatesResponseBody\templateInfoList;
use AlibabaCloud\Tea\Model;

class ListClusterTemplatesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var templateInfoList
     */
    public $templateInfoList;
    protected $_name = [
        'totalCount'       => 'TotalCount',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'pageNumber'       => 'PageNumber',
        'templateInfoList' => 'TemplateInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->templateInfoList) {
            $res['TemplateInfoList'] = null !== $this->templateInfoList ? $this->templateInfoList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TemplateInfoList'])) {
            $model->templateInfoList = templateInfoList::fromMap($map['TemplateInfoList']);
        }

        return $model;
    }
}
