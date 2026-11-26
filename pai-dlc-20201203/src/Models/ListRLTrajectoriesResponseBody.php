<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ListRLTrajectoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

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
    public $promptUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var RLTrajectory[]
     */
    public $trajectories;
    protected $_name = [
        'jobId' => 'JobId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'promptUid' => 'PromptUid',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trajectories' => 'Trajectories',
    ];

    public function validate()
    {
        if (\is_array($this->trajectories)) {
            Model::validateArray($this->trajectories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->promptUid) {
            $res['PromptUid'] = $this->promptUid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trajectories) {
            if (\is_array($this->trajectories)) {
                $res['Trajectories'] = [];
                $n1 = 0;
                foreach ($this->trajectories as $item1) {
                    $res['Trajectories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PromptUid'])) {
            $model->promptUid = $map['PromptUid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Trajectories'])) {
            if (!empty($map['Trajectories'])) {
                $model->trajectories = [];
                $n1 = 0;
                foreach ($map['Trajectories'] as $item1) {
                    $model->trajectories[$n1] = RLTrajectory::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
