<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest\dstNode;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest\srcNode;

class FindContainerNetworkConnectRequest extends Model
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
     * @var dstNode
     */
    public $dstNode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var srcNode
     */
    public $srcNode;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'criteriaType' => 'CriteriaType',
        'currentPage' => 'CurrentPage',
        'dstNode' => 'DstNode',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'srcNode' => 'SrcNode',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (null !== $this->dstNode) {
            $this->dstNode->validate();
        }
        if (null !== $this->srcNode) {
            $this->srcNode->validate();
        }
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

        if (null !== $this->dstNode) {
            $res['DstNode'] = null !== $this->dstNode ? $this->dstNode->toArray($noStream) : $this->dstNode;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->srcNode) {
            $res['SrcNode'] = null !== $this->srcNode ? $this->srcNode->toArray($noStream) : $this->srcNode;
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
