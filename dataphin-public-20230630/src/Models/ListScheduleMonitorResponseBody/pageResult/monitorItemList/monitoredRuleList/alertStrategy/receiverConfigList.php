<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertStrategy;

use AlibabaCloud\Dara\Model;

class receiverConfigList extends Model
{
    /**
     * @var string[]
     */
    public $customAlertChannelIdList;

    /**
     * @var string[]
     */
    public $onDutyTableIdList;

    /**
     * @var string[]
     */
    public $receivedWayList;

    /**
     * @var string
     */
    public $receiverType;

    /**
     * @var string[]
     */
    public $receiverUserIdList;
    protected $_name = [
        'customAlertChannelIdList' => 'CustomAlertChannelIdList',
        'onDutyTableIdList' => 'OnDutyTableIdList',
        'receivedWayList' => 'ReceivedWayList',
        'receiverType' => 'ReceiverType',
        'receiverUserIdList' => 'ReceiverUserIdList',
    ];

    public function validate()
    {
        if (\is_array($this->customAlertChannelIdList)) {
            Model::validateArray($this->customAlertChannelIdList);
        }
        if (\is_array($this->onDutyTableIdList)) {
            Model::validateArray($this->onDutyTableIdList);
        }
        if (\is_array($this->receivedWayList)) {
            Model::validateArray($this->receivedWayList);
        }
        if (\is_array($this->receiverUserIdList)) {
            Model::validateArray($this->receiverUserIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customAlertChannelIdList) {
            if (\is_array($this->customAlertChannelIdList)) {
                $res['CustomAlertChannelIdList'] = [];
                $n1 = 0;
                foreach ($this->customAlertChannelIdList as $item1) {
                    $res['CustomAlertChannelIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->onDutyTableIdList) {
            if (\is_array($this->onDutyTableIdList)) {
                $res['OnDutyTableIdList'] = [];
                $n1 = 0;
                foreach ($this->onDutyTableIdList as $item1) {
                    $res['OnDutyTableIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receivedWayList) {
            if (\is_array($this->receivedWayList)) {
                $res['ReceivedWayList'] = [];
                $n1 = 0;
                foreach ($this->receivedWayList as $item1) {
                    $res['ReceivedWayList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receiverType) {
            $res['ReceiverType'] = $this->receiverType;
        }

        if (null !== $this->receiverUserIdList) {
            if (\is_array($this->receiverUserIdList)) {
                $res['ReceiverUserIdList'] = [];
                $n1 = 0;
                foreach ($this->receiverUserIdList as $item1) {
                    $res['ReceiverUserIdList'][$n1] = $item1;
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
        if (isset($map['CustomAlertChannelIdList'])) {
            if (!empty($map['CustomAlertChannelIdList'])) {
                $model->customAlertChannelIdList = [];
                $n1 = 0;
                foreach ($map['CustomAlertChannelIdList'] as $item1) {
                    $model->customAlertChannelIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['OnDutyTableIdList'])) {
            if (!empty($map['OnDutyTableIdList'])) {
                $model->onDutyTableIdList = [];
                $n1 = 0;
                foreach ($map['OnDutyTableIdList'] as $item1) {
                    $model->onDutyTableIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReceivedWayList'])) {
            if (!empty($map['ReceivedWayList'])) {
                $model->receivedWayList = [];
                $n1 = 0;
                foreach ($map['ReceivedWayList'] as $item1) {
                    $model->receivedWayList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ReceiverType'])) {
            $model->receiverType = $map['ReceiverType'];
        }

        if (isset($map['ReceiverUserIdList'])) {
            if (!empty($map['ReceiverUserIdList'])) {
                $model->receiverUserIdList = [];
                $n1 = 0;
                foreach ($map['ReceiverUserIdList'] as $item1) {
                    $model->receiverUserIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
