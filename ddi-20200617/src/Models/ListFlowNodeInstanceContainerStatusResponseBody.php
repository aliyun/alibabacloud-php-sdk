<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusResponseBody\containerStatusList;
use AlibabaCloud\Tea\Model;

class ListFlowNodeInstanceContainerStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $total;

    /**
     * @var containerStatusList
     */
    public $containerStatusList;
    protected $_name = [
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'total'               => 'Total',
        'containerStatusList' => 'ContainerStatusList',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->containerStatusList) {
            $res['ContainerStatusList'] = null !== $this->containerStatusList ? $this->containerStatusList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFlowNodeInstanceContainerStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['ContainerStatusList'])) {
            $model->containerStatusList = containerStatusList::fromMap($map['ContainerStatusList']);
        }

        return $model;
    }
}
