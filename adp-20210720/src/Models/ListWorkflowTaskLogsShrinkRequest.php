<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListWorkflowTaskLogsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $filterValuesShrink;

    /**
     * @example ENUM:["positive","reverse"]
     *
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $workflowType;

    /**
     * @var string
     */
    public $xuid;
    protected $_name = [
        'filterValuesShrink' => 'filterValues',
        'orderType'          => 'orderType',
        'pageNum'            => 'pageNum',
        'pageSize'           => 'pageSize',
        'workflowType'       => 'workflowType',
        'xuid'               => 'xuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterValuesShrink) {
            $res['filterValues'] = $this->filterValuesShrink;
        }
        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->workflowType) {
            $res['workflowType'] = $this->workflowType;
        }
        if (null !== $this->xuid) {
            $res['xuid'] = $this->xuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkflowTaskLogsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['filterValues'])) {
            $model->filterValuesShrink = $map['filterValues'];
        }
        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['workflowType'])) {
            $model->workflowType = $map['workflowType'];
        }
        if (isset($map['xuid'])) {
            $model->xuid = $map['xuid'];
        }

        return $model;
    }
}
