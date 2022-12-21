<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList\publishJobList;
use AlibabaCloud\Tea\Model;

class publishTaskInfoList extends Model
{
    /**
     * @example 4325
     *
     * @var int
     */
    public $dbId;

    /**
     * @example false
     *
     * @var bool
     */
    public $logic;

    /**
     * @example 2020-12-14 20:52:38
     *
     * @var string
     */
    public $planTime;

    /**
     * @var publishJobList[]
     */
    public $publishJobList;

    /**
     * @example IMMEDIATELY
     *
     * @var string
     */
    public $publishStrategy;

    /**
     * @example NONE
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @example NONE
     *
     * @var string
     */
    public $taskJobStatus;
    protected $_name = [
        'dbId'            => 'DbId',
        'logic'           => 'Logic',
        'planTime'        => 'PlanTime',
        'publishJobList'  => 'PublishJobList',
        'publishStrategy' => 'PublishStrategy',
        'statusDesc'      => 'StatusDesc',
        'taskJobStatus'   => 'TaskJobStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->planTime) {
            $res['PlanTime'] = $this->planTime;
        }
        if (null !== $this->publishJobList) {
            $res['PublishJobList'] = [];
            if (null !== $this->publishJobList && \is_array($this->publishJobList)) {
                $n = 0;
                foreach ($this->publishJobList as $item) {
                    $res['PublishJobList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->publishStrategy) {
            $res['PublishStrategy'] = $this->publishStrategy;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->taskJobStatus) {
            $res['TaskJobStatus'] = $this->taskJobStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publishTaskInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['PlanTime'])) {
            $model->planTime = $map['PlanTime'];
        }
        if (isset($map['PublishJobList'])) {
            if (!empty($map['PublishJobList'])) {
                $model->publishJobList = [];
                $n                     = 0;
                foreach ($map['PublishJobList'] as $item) {
                    $model->publishJobList[$n++] = null !== $item ? publishJobList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PublishStrategy'])) {
            $model->publishStrategy = $map['PublishStrategy'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TaskJobStatus'])) {
            $model->taskJobStatus = $map['TaskJobStatus'];
        }

        return $model;
    }
}
