<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListFlowNodeInstanceContainerStatusResponseBody\containerStatusList;
use AlibabaCloud\Tea\Model;

class ListFlowNodeInstanceContainerStatusResponseBody extends Model
{
    /**
     * @var containerStatusList
     */
    public $containerStatusList;

    /**
     * @var int
     */
    public $pageNumber;

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
    public $total;
    protected $_name = [
        'containerStatusList' => 'ContainerStatusList',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'total'               => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerStatusList) {
            $res['ContainerStatusList'] = null !== $this->containerStatusList ? $this->containerStatusList->toMap() : null;
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
     * @return ListFlowNodeInstanceContainerStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerStatusList'])) {
            $model->containerStatusList = containerStatusList::fromMap($map['ContainerStatusList']);
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
