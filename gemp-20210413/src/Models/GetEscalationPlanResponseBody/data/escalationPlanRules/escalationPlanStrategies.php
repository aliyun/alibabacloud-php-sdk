<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules;

use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies\noticeObjectList;
use AlibabaCloud\SDK\GEMP\V20210413\Models\GetEscalationPlanResponseBody\data\escalationPlanRules\escalationPlanStrategies\serviceGroups;
use AlibabaCloud\Tea\Model;

class escalationPlanStrategies extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableWebhook;

    /**
     * @example UN_ACKNOWLEDGE
     *
     * @var string
     */
    public $escalationPlanType;

    /**
     * @example SMS
     *
     * @var string
     */
    public $noticeChannels;

    /**
     * @var noticeObjectList[]
     */
    public $noticeObjectList;

    /**
     * @example 40
     *
     * @var int
     */
    public $noticeTime;

    /**
     * @var serviceGroups[]
     */
    public $serviceGroups;
    protected $_name = [
        'enableWebhook'      => 'enableWebhook',
        'escalationPlanType' => 'escalationPlanType',
        'noticeChannels'     => 'noticeChannels',
        'noticeObjectList'   => 'noticeObjectList',
        'noticeTime'         => 'noticeTime',
        'serviceGroups'      => 'serviceGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableWebhook) {
            $res['enableWebhook'] = $this->enableWebhook;
        }
        if (null !== $this->escalationPlanType) {
            $res['escalationPlanType'] = $this->escalationPlanType;
        }
        if (null !== $this->noticeChannels) {
            $res['noticeChannels'] = $this->noticeChannels;
        }
        if (null !== $this->noticeObjectList) {
            $res['noticeObjectList'] = [];
            if (null !== $this->noticeObjectList && \is_array($this->noticeObjectList)) {
                $n = 0;
                foreach ($this->noticeObjectList as $item) {
                    $res['noticeObjectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->noticeTime) {
            $res['noticeTime'] = $this->noticeTime;
        }
        if (null !== $this->serviceGroups) {
            $res['serviceGroups'] = [];
            if (null !== $this->serviceGroups && \is_array($this->serviceGroups)) {
                $n = 0;
                foreach ($this->serviceGroups as $item) {
                    $res['serviceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalationPlanStrategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableWebhook'])) {
            $model->enableWebhook = $map['enableWebhook'];
        }
        if (isset($map['escalationPlanType'])) {
            $model->escalationPlanType = $map['escalationPlanType'];
        }
        if (isset($map['noticeChannels'])) {
            $model->noticeChannels = $map['noticeChannels'];
        }
        if (isset($map['noticeObjectList'])) {
            if (!empty($map['noticeObjectList'])) {
                $model->noticeObjectList = [];
                $n                       = 0;
                foreach ($map['noticeObjectList'] as $item) {
                    $model->noticeObjectList[$n++] = null !== $item ? noticeObjectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['noticeTime'])) {
            $model->noticeTime = $map['noticeTime'];
        }
        if (isset($map['serviceGroups'])) {
            if (!empty($map['serviceGroups'])) {
                $model->serviceGroups = [];
                $n                    = 0;
                foreach ($map['serviceGroups'] as $item) {
                    $model->serviceGroups[$n++] = null !== $item ? serviceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
