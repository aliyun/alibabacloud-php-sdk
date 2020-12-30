<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListApmApplicationResponseBody\apmAppInfoList;
use AlibabaCloud\Tea\Model;

class ListApmApplicationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var apmAppInfoList
     */
    public $apmAppInfoList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId'      => 'RequestId',
        'pageSize'       => 'PageSize',
        'apmAppInfoList' => 'ApmAppInfoList',
        'pageNumber'     => 'PageNumber',
        'total'          => 'Total',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->apmAppInfoList) {
            $res['ApmAppInfoList'] = null !== $this->apmAppInfoList ? $this->apmAppInfoList->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApmApplicationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ApmAppInfoList'])) {
            $model->apmAppInfoList = apmAppInfoList::fromMap($map['ApmAppInfoList']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
