<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfig;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfigEscalationList;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\alertConfigTargetList;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHostAvailabilityRequest\taskOption;

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
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string[]
     */
    public $instanceList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskScope;
    protected $_name = [
        'alertConfig' => 'AlertConfig',
        'taskOption' => 'TaskOption',
        'alertConfigEscalationList' => 'AlertConfigEscalationList',
        'alertConfigTargetList' => 'AlertConfigTargetList',
        'groupId' => 'GroupId',
        'id' => 'Id',
        'instanceList' => 'InstanceList',
        'regionId' => 'RegionId',
        'taskName' => 'TaskName',
        'taskScope' => 'TaskScope',
    ];

    public function validate()
    {
        if (null !== $this->alertConfig) {
            $this->alertConfig->validate();
        }
        if (null !== $this->taskOption) {
            $this->taskOption->validate();
        }
        if (\is_array($this->alertConfigEscalationList)) {
            Model::validateArray($this->alertConfigEscalationList);
        }
        if (\is_array($this->alertConfigTargetList)) {
            Model::validateArray($this->alertConfigTargetList);
        }
        if (\is_array($this->instanceList)) {
            Model::validateArray($this->instanceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toArray($noStream) : $this->alertConfig;
        }

        if (null !== $this->taskOption) {
            $res['TaskOption'] = null !== $this->taskOption ? $this->taskOption->toArray($noStream) : $this->taskOption;
        }

        if (null !== $this->alertConfigEscalationList) {
            if (\is_array($this->alertConfigEscalationList)) {
                $res['AlertConfigEscalationList'] = [];
                $n1 = 0;
                foreach ($this->alertConfigEscalationList as $item1) {
                    $res['AlertConfigEscalationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertConfigTargetList) {
            if (\is_array($this->alertConfigTargetList)) {
                $res['AlertConfigTargetList'] = [];
                $n1 = 0;
                foreach ($this->alertConfigTargetList as $item1) {
                    $res['AlertConfigTargetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->instanceList)) {
                $res['InstanceList'] = [];
                $n1 = 0;
                foreach ($this->instanceList as $item1) {
                    $res['InstanceList'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['AlertConfigEscalationList'] as $item1) {
                    $model->alertConfigEscalationList[$n1] = alertConfigEscalationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertConfigTargetList'])) {
            if (!empty($map['AlertConfigTargetList'])) {
                $model->alertConfigTargetList = [];
                $n1 = 0;
                foreach ($map['AlertConfigTargetList'] as $item1) {
                    $model->alertConfigTargetList[$n1] = alertConfigTargetList::fromMap($item1);
                    ++$n1;
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
                $model->instanceList = [];
                $n1 = 0;
                foreach ($map['InstanceList'] as $item1) {
                    $model->instanceList[$n1] = $item1;
                    ++$n1;
                }
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
