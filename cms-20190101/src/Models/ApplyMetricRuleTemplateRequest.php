<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class ApplyMetricRuleTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $appendMode;

    /**
     * @var string
     */
    public $applyMode;

    /**
     * @var int
     */
    public $enableEndTime;

    /**
     * @var int
     */
    public $enableStartTime;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $notifyLevel;

    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var string
     */
    public $templateIds;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'appendMode' => 'AppendMode',
        'applyMode' => 'ApplyMode',
        'enableEndTime' => 'EnableEndTime',
        'enableStartTime' => 'EnableStartTime',
        'groupId' => 'GroupId',
        'notifyLevel' => 'NotifyLevel',
        'silenceTime' => 'SilenceTime',
        'templateIds' => 'TemplateIds',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appendMode) {
            $res['AppendMode'] = $this->appendMode;
        }

        if (null !== $this->applyMode) {
            $res['ApplyMode'] = $this->applyMode;
        }

        if (null !== $this->enableEndTime) {
            $res['EnableEndTime'] = $this->enableEndTime;
        }

        if (null !== $this->enableStartTime) {
            $res['EnableStartTime'] = $this->enableStartTime;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
        }

        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }

        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
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
        if (isset($map['AppendMode'])) {
            $model->appendMode = $map['AppendMode'];
        }

        if (isset($map['ApplyMode'])) {
            $model->applyMode = $map['ApplyMode'];
        }

        if (isset($map['EnableEndTime'])) {
            $model->enableEndTime = $map['EnableEndTime'];
        }

        if (isset($map['EnableStartTime'])) {
            $model->enableStartTime = $map['EnableStartTime'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }

        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }

        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }

        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
