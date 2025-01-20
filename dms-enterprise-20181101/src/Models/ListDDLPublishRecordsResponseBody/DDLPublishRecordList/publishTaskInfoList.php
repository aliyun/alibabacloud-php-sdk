<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDDLPublishRecordsResponseBody\DDLPublishRecordList\publishTaskInfoList\publishJobList;

class publishTaskInfoList extends Model
{
    /**
     * @var int
     */
    public $dbId;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var string
     */
    public $planTime;
    /**
     * @var publishJobList[]
     */
    public $publishJobList;
    /**
     * @var string
     */
    public $publishStrategy;
    /**
     * @var string
     */
    public $statusDesc;
    /**
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
        if (\is_array($this->publishJobList)) {
            Model::validateArray($this->publishJobList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->publishJobList)) {
                $res['PublishJobList'] = [];
                $n1                    = 0;
                foreach ($this->publishJobList as $item1) {
                    $res['PublishJobList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1                    = 0;
                foreach ($map['PublishJobList'] as $item1) {
                    $model->publishJobList[$n1++] = publishJobList::fromMap($item1);
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
