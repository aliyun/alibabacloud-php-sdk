<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfigEscalationList;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfigTargetList;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\taskOption;
use AlibabaCloud\Tea\Model;

class ModifyHostAvailabilityRequest extends Model
{
    /**
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @var taskOption
     */
    public $taskOption;

    /**
     * @var alertConfigEscalationList[]
     */
    public $alertConfigEscalationList;

    /**
     * @var alertConfigTargetList[]
     */
    public $alertConfigTargetList;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the resource.
     *
     * Format: `acs:{Service name abbreviation}:{regionId}:{userId}:/{Resource type}/{Resource name}/message`. Example: `acs:mns:cn-hangzhou:120886317861****:/queues/test123/message`. Fields:
     *
     *   {Service name abbreviation}: the abbreviation of the service name. Valid value: mns.
     *   {userId}: the ID of the Alibaba Cloud account.
     *   {regionId}: the region ID of the message queue or topic.
     *   {Resource type}`: the type of the resource for which alerts are triggered. Valid values: - **queues** - **topics** {Resource name}: the name of the resource. - If the resource type is set to **queues**, the resource name is the name of the message queue. - If the resource type is set to **topics**, the resource name is the name of the topic.`
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The metric for which the alert feature is enabled. Valid values of N: 1 to 21. Valid values:
     *
     *   HttpStatus: HTTP status code
     *   HttpLatency: HTTP response time
     *   TelnetStatus: Telnet status code
     *   TelnetLatency: Telnet response time
     *   PingLostRate: Ping packet loss rate
     *
     * @example 12345
     *
     * @var int
     */
    public $id;

    /**
     * @example i-absdfkwl321****
     *
     * @var string[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example task2
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The comparison operator that is used in the alert rule. Valid values of N: 1 to 21. Valid values:
     *
     *   `>`
     *   `>=`
     *   `<`
     *   `<=`
     *   `=`
     *
     * @example GROUP
     *
     * @var string
     */
    public $taskScope;
    protected $_name = [
        'alertConfig'               => 'AlertConfig',
        'taskOption'                => 'TaskOption',
        'alertConfigEscalationList' => 'AlertConfigEscalationList',
        'alertConfigTargetList'     => 'AlertConfigTargetList',
        'groupId'                   => 'GroupId',
        'id'                        => 'Id',
        'instanceList'              => 'InstanceList',
        'regionId'                  => 'RegionId',
        'taskName'                  => 'TaskName',
        'taskScope'                 => 'TaskScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }
        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toMap() : null;
        }
        if (null !== $this->alertConfigEscalationList) {
            $res['AlertConfigEscalationList'] = [];
            if (null !== $this->alertConfigEscalationList && \is_array($this->alertConfigEscalationList)) {
                $n = 0;
                foreach ($this->alertConfigEscalationList as $item) {
                    $res['AlertConfigEscalationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertConfigTargetList) {
            $res['AlertConfigTargetList'] = [];
            if (null !== $this->alertConfigTargetList && \is_array($this->alertConfigTargetList)) {
                $n = 0;
                foreach ($this->alertConfigTargetList as $item) {
                    $res['AlertConfigTargetList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = $this->instanceList;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskScope) {
            $res['TaskScope'] = $this->taskScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHostAvailabilityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }
        if (isset($map['TaskOption'])) {
            $model->taskOption = taskOption::fromMap($map['TaskOption']);
        }
        if (isset($map['AlertConfigEscalationList'])) {
            if (!empty($map['AlertConfigEscalationList'])) {
                $model->alertConfigEscalationList = [];
                $n                                = 0;
                foreach ($map['AlertConfigEscalationList'] as $item) {
                    $model->alertConfigEscalationList[$n++] = null !== $item ? alertConfigEscalationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertConfigTargetList'])) {
            if (!empty($map['AlertConfigTargetList'])) {
                $model->alertConfigTargetList = [];
                $n                            = 0;
                foreach ($map['AlertConfigTargetList'] as $item) {
                    $model->alertConfigTargetList[$n++] = null !== $item ? alertConfigTargetList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceList'])) {
            if (!empty($map['InstanceList'])) {
                $model->instanceList = $map['InstanceList'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskScope'])) {
            $model->taskScope = $map['TaskScope'];
        }

        return $model;
    }
}
