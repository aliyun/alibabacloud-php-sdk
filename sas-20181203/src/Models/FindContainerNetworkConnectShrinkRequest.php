<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class FindContainerNetworkConnectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $criteriaType;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dstNodeShrink;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $srcNodeShrink;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'criteriaType' => 'CriteriaType',
        'currentPage' => 'CurrentPage',
        'dstNodeShrink' => 'DstNode',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'srcNodeShrink' => 'SrcNode',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
