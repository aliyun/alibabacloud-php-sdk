<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetJobResourceUsageResponseBody\data\jobResourceUsageList;

class data extends Model
{
    /**
     * @var jobResourceUsageList[]
     */
    public $jobResourceUsageList;

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
    public $totalCount;
    protected $_name = [
        'jobResourceUsageList' => 'jobResourceUsageList',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->jobResourceUsageList)) {
            Model::validateArray($this->jobResourceUsageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobResourceUsageList) {
            if (\is_array($this->jobResourceUsageList)) {
                $res['jobResourceUsageList'] = [];
                $n1 = 0;
                foreach ($this->jobResourceUsageList as $item1) {
                    $res['jobResourceUsageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['jobResourceUsageList'])) {
            if (!empty($map['jobResourceUsageList'])) {
                $model->jobResourceUsageList = [];
                $n1 = 0;
                foreach ($map['jobResourceUsageList'] as $item1) {
                    $model->jobResourceUsageList[$n1++] = jobResourceUsageList::fromMap($item1);
                }
            }
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
