<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListLiveRecordFilesRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string[]
     */
    public $jobIds;
    /**
     * @var int
     */
    public $pageNo;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $recordFormat;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'jobIds'       => 'JobIds',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'recordFormat' => 'RecordFormat',
        'sortBy'       => 'SortBy',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->jobIds)) {
            Model::validateArray($this->jobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->jobIds) {
            if (\is_array($this->jobIds)) {
                $res['JobIds'] = [];
                $n1            = 0;
                foreach ($this->jobIds as $item1) {
                    $res['JobIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = $this->recordFormat;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = [];
                $n1            = 0;
                foreach ($map['JobIds'] as $item1) {
                    $model->jobIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecordFormat'])) {
            $model->recordFormat = $map['RecordFormat'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
