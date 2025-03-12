<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest\dstNode;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest\srcNode;
use AlibabaCloud\Tea\Model;

class FindContainerNetworkConnectRequest extends Model
{
    /**
     * @description The type of the information that you want to query. Valid values:
     *
     *   **EDGE**: connection information
     *
     * @example EDGE
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The information about the destination node.
     *
     * @var dstNode
     */
    public $dstNode;

    /**
     * @description The end time of the network connection.
     *
     * @example 1649260799999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The information about the source node.
     *
     * @var srcNode
     */
    public $srcNode;

    /**
     * @description The start time of the network connection.
     *
     * @example 1666886400000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'criteriaType' => 'CriteriaType',
        'currentPage'  => 'CurrentPage',
        'dstNode'      => 'DstNode',
        'endTime'      => 'EndTime',
        'pageSize'     => 'PageSize',
        'srcNode'      => 'SrcNode',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteriaType) {
            $res['CriteriaType'] = $this->criteriaType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->dstNode) {
            $res['DstNode'] = null !== $this->dstNode ? $this->dstNode->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->srcNode) {
            $res['SrcNode'] = null !== $this->srcNode ? $this->srcNode->toMap() : null;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindContainerNetworkConnectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CriteriaType'])) {
            $model->criteriaType = $map['CriteriaType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DstNode'])) {
            $model->dstNode = dstNode::fromMap($map['DstNode']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SrcNode'])) {
            $model->srcNode = srcNode::fromMap($map['SrcNode']);
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
