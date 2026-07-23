<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentAccuracyTestResultsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\ListDataAgentAccuracyTestResultsResponseBody\data\content;

class data extends Model
{
    /**
     * @var float
     */
    public $accuracyRate;

    /**
     * @var string
     */
    public $accuracyTestTaskId;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var int
     */
    public $correctCount;

    /**
     * @var string
     */
    public $failedCount;

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
    public $pendingCount;

    /**
     * @var int
     */
    public $totalElements;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'accuracyRate' => 'AccuracyRate',
        'accuracyTestTaskId' => 'AccuracyTestTaskId',
        'content' => 'Content',
        'correctCount' => 'CorrectCount',
        'failedCount' => 'FailedCount',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'pendingCount' => 'PendingCount',
        'totalElements' => 'TotalElements',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accuracyRate) {
            $res['AccuracyRate'] = $this->accuracyRate;
        }

        if (null !== $this->accuracyTestTaskId) {
            $res['AccuracyTestTaskId'] = $this->accuracyTestTaskId;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->correctCount) {
            $res['CorrectCount'] = $this->correctCount;
        }

        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pendingCount) {
            $res['PendingCount'] = $this->pendingCount;
        }

        if (null !== $this->totalElements) {
            $res['TotalElements'] = $this->totalElements;
        }

        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
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
        if (isset($map['AccuracyRate'])) {
            $model->accuracyRate = $map['AccuracyRate'];
        }

        if (isset($map['AccuracyTestTaskId'])) {
            $model->accuracyTestTaskId = $map['AccuracyTestTaskId'];
        }

        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CorrectCount'])) {
            $model->correctCount = $map['CorrectCount'];
        }

        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PendingCount'])) {
            $model->pendingCount = $map['PendingCount'];
        }

        if (isset($map['TotalElements'])) {
            $model->totalElements = $map['TotalElements'];
        }

        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
