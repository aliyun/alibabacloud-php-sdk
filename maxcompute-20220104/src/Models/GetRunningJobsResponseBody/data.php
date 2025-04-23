<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetRunningJobsResponseBody\data\runningJobInfoList;

class data extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var runningJobInfoList[]
     */
    public $runningJobInfoList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'runningJobInfoList' => 'runningJobInfoList',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->runningJobInfoList)) {
            Model::validateArray($this->runningJobInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->runningJobInfoList) {
            if (\is_array($this->runningJobInfoList)) {
                $res['runningJobInfoList'] = [];
                $n1 = 0;
                foreach ($this->runningJobInfoList as $item1) {
                    $res['runningJobInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['runningJobInfoList'])) {
            if (!empty($map['runningJobInfoList'])) {
                $model->runningJobInfoList = [];
                $n1 = 0;
                foreach ($map['runningJobInfoList'] as $item1) {
                    $model->runningJobInfoList[$n1++] = runningJobInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
