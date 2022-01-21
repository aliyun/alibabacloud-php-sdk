<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowJobHistoryResponseBody\nodeInstances;
use AlibabaCloud\Tea\Model;

class ListFlowJobHistoryResponseBody extends Model
{
    /**
     * @description 作业实例列表。
     *
     * @var nodeInstances
     */
    public $nodeInstances;

    /**
     * @description 当前页码。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时设置的每页行数。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求ID。
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 记录总数。
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'nodeInstances' => 'NodeInstances',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'total'         => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeInstances) {
            $res['NodeInstances'] = null !== $this->nodeInstances ? $this->nodeInstances->toMap() : null;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowJobHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeInstances'])) {
            $model->nodeInstances = nodeInstances::fromMap($map['NodeInstances']);
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
