<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowNodeInstanceResponseBody\flowNodeInstances;
use AlibabaCloud\Tea\Model;

class ListFlowNodeInstanceResponseBody extends Model
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
     * @var int
     */
    public $pageNumber;

    /**
     * @var flowNodeInstances
     */
    public $flowNodeInstances;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId'         => 'RequestId',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'flowNodeInstances' => 'FlowNodeInstances',
        'total'             => 'Total',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->flowNodeInstances) {
            $res['FlowNodeInstances'] = null !== $this->flowNodeInstances ? $this->flowNodeInstances->toMap() : null;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowNodeInstanceResponseBody
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['FlowNodeInstances'])) {
            $model->flowNodeInstances = flowNodeInstances::fromMap($map['FlowNodeInstances']);
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
