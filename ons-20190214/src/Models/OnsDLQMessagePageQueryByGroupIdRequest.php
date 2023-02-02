<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsDLQMessagePageQueryByGroupIdRequest extends Model
{
    /**
     * @description The beginning of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds. If you specify a valid value for the **TaskId** parameter in the request, this parameter does not take effect. The system uses the value of the BeginTime parameter that you specified in the request when you created the specified query task.
     *
     * @example 1570723200000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The number of the page to return. Pages start from page 1. Valid values: 1 to 50.
     *
     * @example 2
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value of this parameter is a UNIX timestamp in milliseconds. If you specify a valid value for the **TaskId** parameter in the request, this parameter does not take effect. The system uses the value of the EndTime parameter that you specified in the request when you created the specified query task.
     *
     * @example 1570809600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the consumer group whose dead-letter messages you want to query.
     *
     * @example GID_test_group_id
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the instance to which the dead-letter messages you want to query belong.
     *
     * @example MQ_INST_111111111111_DOxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of dead-letter messages to return on each page. Valid values: 5 to 50. Default value: 20. If you specify a valid value for the **TaskId** parameter in the request, this parameter does not take effect. The system uses the value of the PageSize parameter that you specified in the request when you created the specified query task.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the query task. The first time you call this operation to query dead-letter messages that are sent to a specified consumer group within a specified time range, this parameter is not required. This parameter is required in subsequent queries for dead-letter messages on a specified page. You can obtain the task ID from the returned result of the first query.
     *
     * @example 0BC1310300002A9F000021E4D7A48346
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'beginTime'   => 'BeginTime',
        'currentPage' => 'CurrentPage',
        'endTime'     => 'EndTime',
        'groupId'     => 'GroupId',
        'instanceId'  => 'InstanceId',
        'pageSize'    => 'PageSize',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsDLQMessagePageQueryByGroupIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
