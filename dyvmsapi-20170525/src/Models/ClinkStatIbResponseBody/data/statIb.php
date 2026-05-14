<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkStatIbResponseBody\data;

use AlibabaCloud\Dara\Model;

class statIb extends Model
{
    /**
     * @var int
     */
    public $answeredAgentCount;

    /**
     * @var int
     */
    public $avgAnsweredAgentCount;

    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var string
     */
    public $hotlineName;

    /**
     * @var int
     */
    public $ibAgentCount;

    /**
     * @var int
     */
    public $ibAnsweredCount;

    /**
     * @var int
     */
    public $ibAnsweredQueueDuration;

    /**
     * @var float
     */
    public $ibAnsweredRate;

    /**
     * @var int
     */
    public $ibAvgAnsweredQueueDuration;

    /**
     * @var int
     */
    public $ibAvgBridgeDuration;

    /**
     * @var int
     */
    public $ibAvgDuration;

    /**
     * @var int
     */
    public $ibAvgQueueDuration;

    /**
     * @var int
     */
    public $ibBotAnsweredCount;

    /**
     * @var int
     */
    public $ibBotUnansweredCount;

    /**
     * @var int
     */
    public $ibBridgeDuration;

    /**
     * @var int
     */
    public $ibDirectAgentCount;

    /**
     * @var int
     */
    public $ibDirectQueueCount;

    /**
     * @var int
     */
    public $ibDirectTelCount;

    /**
     * @var int
     */
    public $ibIvrAnsweredCount;

    /**
     * @var int
     */
    public $ibIvrCount;

    /**
     * @var int
     */
    public $ibIvrNoQueueCount;

    /**
     * @var int
     */
    public $ibIvrQueueCount;

    /**
     * @var int
     */
    public $ibIvrQuickUnlinkCount;

    /**
     * @var int
     */
    public $ibIvrSystemAnsweredCount;

    /**
     * @var int
     */
    public $ibIvrUnAnsweredCount;

    /**
     * @var int
     */
    public $ibNoIvrCount;

    /**
     * @var int
     */
    public $ibQueueCount;

    /**
     * @var int
     */
    public $ibQueueDuration;

    /**
     * @var int
     */
    public $ibRestrictCount;

    /**
     * @var int
     */
    public $ibRingingRangeCount;

    /**
     * @var float
     */
    public $ibRingingRangeRate;

    /**
     * @var int
     */
    public $ibSystemAnsweredCount;

    /**
     * @var int
     */
    public $ibSystemUnAnsweredCount;

    /**
     * @var int
     */
    public $ibTotalCount;

    /**
     * @var int
     */
    public $ibUnansweredCount;

    /**
     * @var int
     */
    public $ibVipCount;

    /**
     * @var int
     */
    public $ibWebCount;

    /**
     * @var int
     */
    public $ibtotalDuration;

    /**
     * @var int
     */
    public $ivrDirectTelAnsweredCount;

    /**
     * @var int
     */
    public $ivrDirectTelCount;

    /**
     * @var int
     */
    public $ivrDirectTelSysAnsweredCount;

    /**
     * @var int
     */
    public $ivrDirectTelUnansweredCount;

    /**
     * @var int
     */
    public $quickUnlinkCount;

    /**
     * @var int
     */
    public $repeatHotlineCount;
    protected $_name = [
        'answeredAgentCount' => 'AnsweredAgentCount',
        'avgAnsweredAgentCount' => 'AvgAnsweredAgentCount',
        'date' => 'Date',
        'hotline' => 'Hotline',
        'hotlineName' => 'HotlineName',
        'ibAgentCount' => 'IbAgentCount',
        'ibAnsweredCount' => 'IbAnsweredCount',
        'ibAnsweredQueueDuration' => 'IbAnsweredQueueDuration',
        'ibAnsweredRate' => 'IbAnsweredRate',
        'ibAvgAnsweredQueueDuration' => 'IbAvgAnsweredQueueDuration',
        'ibAvgBridgeDuration' => 'IbAvgBridgeDuration',
        'ibAvgDuration' => 'IbAvgDuration',
        'ibAvgQueueDuration' => 'IbAvgQueueDuration',
        'ibBotAnsweredCount' => 'IbBotAnsweredCount',
        'ibBotUnansweredCount' => 'IbBotUnansweredCount',
        'ibBridgeDuration' => 'IbBridgeDuration',
        'ibDirectAgentCount' => 'IbDirectAgentCount',
        'ibDirectQueueCount' => 'IbDirectQueueCount',
        'ibDirectTelCount' => 'IbDirectTelCount',
        'ibIvrAnsweredCount' => 'IbIvrAnsweredCount',
        'ibIvrCount' => 'IbIvrCount',
        'ibIvrNoQueueCount' => 'IbIvrNoQueueCount',
        'ibIvrQueueCount' => 'IbIvrQueueCount',
        'ibIvrQuickUnlinkCount' => 'IbIvrQuickUnlinkCount',
        'ibIvrSystemAnsweredCount' => 'IbIvrSystemAnsweredCount',
        'ibIvrUnAnsweredCount' => 'IbIvrUnAnsweredCount',
        'ibNoIvrCount' => 'IbNoIvrCount',
        'ibQueueCount' => 'IbQueueCount',
        'ibQueueDuration' => 'IbQueueDuration',
        'ibRestrictCount' => 'IbRestrictCount',
        'ibRingingRangeCount' => 'IbRingingRangeCount',
        'ibRingingRangeRate' => 'IbRingingRangeRate',
        'ibSystemAnsweredCount' => 'IbSystemAnsweredCount',
        'ibSystemUnAnsweredCount' => 'IbSystemUnAnsweredCount',
        'ibTotalCount' => 'IbTotalCount',
        'ibUnansweredCount' => 'IbUnansweredCount',
        'ibVipCount' => 'IbVipCount',
        'ibWebCount' => 'IbWebCount',
        'ibtotalDuration' => 'IbtotalDuration',
        'ivrDirectTelAnsweredCount' => 'IvrDirectTelAnsweredCount',
        'ivrDirectTelCount' => 'IvrDirectTelCount',
        'ivrDirectTelSysAnsweredCount' => 'IvrDirectTelSysAnsweredCount',
        'ivrDirectTelUnansweredCount' => 'IvrDirectTelUnansweredCount',
        'quickUnlinkCount' => 'QuickUnlinkCount',
        'repeatHotlineCount' => 'RepeatHotlineCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answeredAgentCount) {
            $res['AnsweredAgentCount'] = $this->answeredAgentCount;
        }

        if (null !== $this->avgAnsweredAgentCount) {
            $res['AvgAnsweredAgentCount'] = $this->avgAnsweredAgentCount;
        }

        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->hotlineName) {
            $res['HotlineName'] = $this->hotlineName;
        }

        if (null !== $this->ibAgentCount) {
            $res['IbAgentCount'] = $this->ibAgentCount;
        }

        if (null !== $this->ibAnsweredCount) {
            $res['IbAnsweredCount'] = $this->ibAnsweredCount;
        }

        if (null !== $this->ibAnsweredQueueDuration) {
            $res['IbAnsweredQueueDuration'] = $this->ibAnsweredQueueDuration;
        }

        if (null !== $this->ibAnsweredRate) {
            $res['IbAnsweredRate'] = $this->ibAnsweredRate;
        }

        if (null !== $this->ibAvgAnsweredQueueDuration) {
            $res['IbAvgAnsweredQueueDuration'] = $this->ibAvgAnsweredQueueDuration;
        }

        if (null !== $this->ibAvgBridgeDuration) {
            $res['IbAvgBridgeDuration'] = $this->ibAvgBridgeDuration;
        }

        if (null !== $this->ibAvgDuration) {
            $res['IbAvgDuration'] = $this->ibAvgDuration;
        }

        if (null !== $this->ibAvgQueueDuration) {
            $res['IbAvgQueueDuration'] = $this->ibAvgQueueDuration;
        }

        if (null !== $this->ibBotAnsweredCount) {
            $res['IbBotAnsweredCount'] = $this->ibBotAnsweredCount;
        }

        if (null !== $this->ibBotUnansweredCount) {
            $res['IbBotUnansweredCount'] = $this->ibBotUnansweredCount;
        }

        if (null !== $this->ibBridgeDuration) {
            $res['IbBridgeDuration'] = $this->ibBridgeDuration;
        }

        if (null !== $this->ibDirectAgentCount) {
            $res['IbDirectAgentCount'] = $this->ibDirectAgentCount;
        }

        if (null !== $this->ibDirectQueueCount) {
            $res['IbDirectQueueCount'] = $this->ibDirectQueueCount;
        }

        if (null !== $this->ibDirectTelCount) {
            $res['IbDirectTelCount'] = $this->ibDirectTelCount;
        }

        if (null !== $this->ibIvrAnsweredCount) {
            $res['IbIvrAnsweredCount'] = $this->ibIvrAnsweredCount;
        }

        if (null !== $this->ibIvrCount) {
            $res['IbIvrCount'] = $this->ibIvrCount;
        }

        if (null !== $this->ibIvrNoQueueCount) {
            $res['IbIvrNoQueueCount'] = $this->ibIvrNoQueueCount;
        }

        if (null !== $this->ibIvrQueueCount) {
            $res['IbIvrQueueCount'] = $this->ibIvrQueueCount;
        }

        if (null !== $this->ibIvrQuickUnlinkCount) {
            $res['IbIvrQuickUnlinkCount'] = $this->ibIvrQuickUnlinkCount;
        }

        if (null !== $this->ibIvrSystemAnsweredCount) {
            $res['IbIvrSystemAnsweredCount'] = $this->ibIvrSystemAnsweredCount;
        }

        if (null !== $this->ibIvrUnAnsweredCount) {
            $res['IbIvrUnAnsweredCount'] = $this->ibIvrUnAnsweredCount;
        }

        if (null !== $this->ibNoIvrCount) {
            $res['IbNoIvrCount'] = $this->ibNoIvrCount;
        }

        if (null !== $this->ibQueueCount) {
            $res['IbQueueCount'] = $this->ibQueueCount;
        }

        if (null !== $this->ibQueueDuration) {
            $res['IbQueueDuration'] = $this->ibQueueDuration;
        }

        if (null !== $this->ibRestrictCount) {
            $res['IbRestrictCount'] = $this->ibRestrictCount;
        }

        if (null !== $this->ibRingingRangeCount) {
            $res['IbRingingRangeCount'] = $this->ibRingingRangeCount;
        }

        if (null !== $this->ibRingingRangeRate) {
            $res['IbRingingRangeRate'] = $this->ibRingingRangeRate;
        }

        if (null !== $this->ibSystemAnsweredCount) {
            $res['IbSystemAnsweredCount'] = $this->ibSystemAnsweredCount;
        }

        if (null !== $this->ibSystemUnAnsweredCount) {
            $res['IbSystemUnAnsweredCount'] = $this->ibSystemUnAnsweredCount;
        }

        if (null !== $this->ibTotalCount) {
            $res['IbTotalCount'] = $this->ibTotalCount;
        }

        if (null !== $this->ibUnansweredCount) {
            $res['IbUnansweredCount'] = $this->ibUnansweredCount;
        }

        if (null !== $this->ibVipCount) {
            $res['IbVipCount'] = $this->ibVipCount;
        }

        if (null !== $this->ibWebCount) {
            $res['IbWebCount'] = $this->ibWebCount;
        }

        if (null !== $this->ibtotalDuration) {
            $res['IbtotalDuration'] = $this->ibtotalDuration;
        }

        if (null !== $this->ivrDirectTelAnsweredCount) {
            $res['IvrDirectTelAnsweredCount'] = $this->ivrDirectTelAnsweredCount;
        }

        if (null !== $this->ivrDirectTelCount) {
            $res['IvrDirectTelCount'] = $this->ivrDirectTelCount;
        }

        if (null !== $this->ivrDirectTelSysAnsweredCount) {
            $res['IvrDirectTelSysAnsweredCount'] = $this->ivrDirectTelSysAnsweredCount;
        }

        if (null !== $this->ivrDirectTelUnansweredCount) {
            $res['IvrDirectTelUnansweredCount'] = $this->ivrDirectTelUnansweredCount;
        }

        if (null !== $this->quickUnlinkCount) {
            $res['QuickUnlinkCount'] = $this->quickUnlinkCount;
        }

        if (null !== $this->repeatHotlineCount) {
            $res['RepeatHotlineCount'] = $this->repeatHotlineCount;
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
        if (isset($map['AnsweredAgentCount'])) {
            $model->answeredAgentCount = $map['AnsweredAgentCount'];
        }

        if (isset($map['AvgAnsweredAgentCount'])) {
            $model->avgAnsweredAgentCount = $map['AvgAnsweredAgentCount'];
        }

        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['HotlineName'])) {
            $model->hotlineName = $map['HotlineName'];
        }

        if (isset($map['IbAgentCount'])) {
            $model->ibAgentCount = $map['IbAgentCount'];
        }

        if (isset($map['IbAnsweredCount'])) {
            $model->ibAnsweredCount = $map['IbAnsweredCount'];
        }

        if (isset($map['IbAnsweredQueueDuration'])) {
            $model->ibAnsweredQueueDuration = $map['IbAnsweredQueueDuration'];
        }

        if (isset($map['IbAnsweredRate'])) {
            $model->ibAnsweredRate = $map['IbAnsweredRate'];
        }

        if (isset($map['IbAvgAnsweredQueueDuration'])) {
            $model->ibAvgAnsweredQueueDuration = $map['IbAvgAnsweredQueueDuration'];
        }

        if (isset($map['IbAvgBridgeDuration'])) {
            $model->ibAvgBridgeDuration = $map['IbAvgBridgeDuration'];
        }

        if (isset($map['IbAvgDuration'])) {
            $model->ibAvgDuration = $map['IbAvgDuration'];
        }

        if (isset($map['IbAvgQueueDuration'])) {
            $model->ibAvgQueueDuration = $map['IbAvgQueueDuration'];
        }

        if (isset($map['IbBotAnsweredCount'])) {
            $model->ibBotAnsweredCount = $map['IbBotAnsweredCount'];
        }

        if (isset($map['IbBotUnansweredCount'])) {
            $model->ibBotUnansweredCount = $map['IbBotUnansweredCount'];
        }

        if (isset($map['IbBridgeDuration'])) {
            $model->ibBridgeDuration = $map['IbBridgeDuration'];
        }

        if (isset($map['IbDirectAgentCount'])) {
            $model->ibDirectAgentCount = $map['IbDirectAgentCount'];
        }

        if (isset($map['IbDirectQueueCount'])) {
            $model->ibDirectQueueCount = $map['IbDirectQueueCount'];
        }

        if (isset($map['IbDirectTelCount'])) {
            $model->ibDirectTelCount = $map['IbDirectTelCount'];
        }

        if (isset($map['IbIvrAnsweredCount'])) {
            $model->ibIvrAnsweredCount = $map['IbIvrAnsweredCount'];
        }

        if (isset($map['IbIvrCount'])) {
            $model->ibIvrCount = $map['IbIvrCount'];
        }

        if (isset($map['IbIvrNoQueueCount'])) {
            $model->ibIvrNoQueueCount = $map['IbIvrNoQueueCount'];
        }

        if (isset($map['IbIvrQueueCount'])) {
            $model->ibIvrQueueCount = $map['IbIvrQueueCount'];
        }

        if (isset($map['IbIvrQuickUnlinkCount'])) {
            $model->ibIvrQuickUnlinkCount = $map['IbIvrQuickUnlinkCount'];
        }

        if (isset($map['IbIvrSystemAnsweredCount'])) {
            $model->ibIvrSystemAnsweredCount = $map['IbIvrSystemAnsweredCount'];
        }

        if (isset($map['IbIvrUnAnsweredCount'])) {
            $model->ibIvrUnAnsweredCount = $map['IbIvrUnAnsweredCount'];
        }

        if (isset($map['IbNoIvrCount'])) {
            $model->ibNoIvrCount = $map['IbNoIvrCount'];
        }

        if (isset($map['IbQueueCount'])) {
            $model->ibQueueCount = $map['IbQueueCount'];
        }

        if (isset($map['IbQueueDuration'])) {
            $model->ibQueueDuration = $map['IbQueueDuration'];
        }

        if (isset($map['IbRestrictCount'])) {
            $model->ibRestrictCount = $map['IbRestrictCount'];
        }

        if (isset($map['IbRingingRangeCount'])) {
            $model->ibRingingRangeCount = $map['IbRingingRangeCount'];
        }

        if (isset($map['IbRingingRangeRate'])) {
            $model->ibRingingRangeRate = $map['IbRingingRangeRate'];
        }

        if (isset($map['IbSystemAnsweredCount'])) {
            $model->ibSystemAnsweredCount = $map['IbSystemAnsweredCount'];
        }

        if (isset($map['IbSystemUnAnsweredCount'])) {
            $model->ibSystemUnAnsweredCount = $map['IbSystemUnAnsweredCount'];
        }

        if (isset($map['IbTotalCount'])) {
            $model->ibTotalCount = $map['IbTotalCount'];
        }

        if (isset($map['IbUnansweredCount'])) {
            $model->ibUnansweredCount = $map['IbUnansweredCount'];
        }

        if (isset($map['IbVipCount'])) {
            $model->ibVipCount = $map['IbVipCount'];
        }

        if (isset($map['IbWebCount'])) {
            $model->ibWebCount = $map['IbWebCount'];
        }

        if (isset($map['IbtotalDuration'])) {
            $model->ibtotalDuration = $map['IbtotalDuration'];
        }

        if (isset($map['IvrDirectTelAnsweredCount'])) {
            $model->ivrDirectTelAnsweredCount = $map['IvrDirectTelAnsweredCount'];
        }

        if (isset($map['IvrDirectTelCount'])) {
            $model->ivrDirectTelCount = $map['IvrDirectTelCount'];
        }

        if (isset($map['IvrDirectTelSysAnsweredCount'])) {
            $model->ivrDirectTelSysAnsweredCount = $map['IvrDirectTelSysAnsweredCount'];
        }

        if (isset($map['IvrDirectTelUnansweredCount'])) {
            $model->ivrDirectTelUnansweredCount = $map['IvrDirectTelUnansweredCount'];
        }

        if (isset($map['QuickUnlinkCount'])) {
            $model->quickUnlinkCount = $map['QuickUnlinkCount'];
        }

        if (isset($map['RepeatHotlineCount'])) {
            $model->repeatHotlineCount = $map['RepeatHotlineCount'];
        }

        return $model;
    }
}
