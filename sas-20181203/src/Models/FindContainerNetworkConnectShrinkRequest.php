<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FindContainerNetworkConnectShrinkRequest extends Model
{
    /**
     * @example EDGE
     *
     * @var string
     */
    public $criteriaType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dstNodeShrink;

    /**
     * @example 1649260799999
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $srcNodeShrink;

    /**
     * @example 1666886400000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'criteriaType'  => 'CriteriaType',
        'currentPage'   => 'CurrentPage',
        'dstNodeShrink' => 'DstNode',
        'endTime'       => 'EndTime',
        'pageSize'      => 'PageSize',
        'srcNodeShrink' => 'SrcNode',
        'startTime'     => 'StartTime',
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
        if (null !== $this->dstNodeShrink) {
            $res['DstNode'] = $this->dstNodeShrink;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->srcNodeShrink) {
            $res['SrcNode'] = $this->srcNodeShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindContainerNetworkConnectShrinkRequest
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
            $model->dstNodeShrink = $map['DstNode'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SrcNode'])) {
            $model->srcNodeShrink = $map['SrcNode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
