<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList\monitoredRuleList\alertReason\unfinishedRuleDetailConfig;

class alertReason extends Model
{
    /**
     * @var string
     */
    public $alertReasonType;

    /**
     * @var int
     */
    public $fixedElapsedTime;

    /**
     * @var string
     */
    public $fixedUnfinishedTime;

    /**
     * @var unfinishedRuleDetailConfig
     */
    public $unfinishedRuleDetailConfig;
    protected $_name = [
        'alertReasonType' => 'AlertReasonType',
        'fixedElapsedTime' => 'FixedElapsedTime',
        'fixedUnfinishedTime' => 'FixedUnfinishedTime',
        'unfinishedRuleDetailConfig' => 'UnfinishedRuleDetailConfig',
    ];

    public function validate()
    {
        if (null !== $this->unfinishedRuleDetailConfig) {
            $this->unfinishedRuleDetailConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertReasonType) {
            $res['AlertReasonType'] = $this->alertReasonType;
        }

        if (null !== $this->fixedElapsedTime) {
            $res['FixedElapsedTime'] = $this->fixedElapsedTime;
        }

        if (null !== $this->fixedUnfinishedTime) {
            $res['FixedUnfinishedTime'] = $this->fixedUnfinishedTime;
        }

        if (null !== $this->unfinishedRuleDetailConfig) {
            $res['UnfinishedRuleDetailConfig'] = null !== $this->unfinishedRuleDetailConfig ? $this->unfinishedRuleDetailConfig->toArray($noStream) : $this->unfinishedRuleDetailConfig;
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
        if (isset($map['AlertReasonType'])) {
            $model->alertReasonType = $map['AlertReasonType'];
        }

        if (isset($map['FixedElapsedTime'])) {
            $model->fixedElapsedTime = $map['FixedElapsedTime'];
        }

        if (isset($map['FixedUnfinishedTime'])) {
            $model->fixedUnfinishedTime = $map['FixedUnfinishedTime'];
        }

        if (isset($map['UnfinishedRuleDetailConfig'])) {
            $model->unfinishedRuleDetailConfig = unfinishedRuleDetailConfig::fromMap($map['UnfinishedRuleDetailConfig']);
        }

        return $model;
    }
}
