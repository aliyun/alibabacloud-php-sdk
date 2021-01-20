<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ApplyMetricRuleTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $silenceTime;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $templateIds;

    /**
     * @var int
     */
    public $enableStartTime;

    /**
     * @var int
     */
    public $enableEndTime;

    /**
     * @var int
     */
    public $notifyLevel;

    /**
     * @var string
     */
    public $applyMode;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'silenceTime'     => 'SilenceTime',
        'groupId'         => 'GroupId',
        'templateIds'     => 'TemplateIds',
        'enableStartTime' => 'EnableStartTime',
        'enableEndTime'   => 'EnableEndTime',
        'notifyLevel'     => 'NotifyLevel',
        'applyMode'       => 'ApplyMode',
        'webhook'         => 'Webhook',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->silenceTime) {
            $res['SilenceTime'] = $this->silenceTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }
        if (null !== $this->enableStartTime) {
            $res['EnableStartTime'] = $this->enableStartTime;
        }
        if (null !== $this->enableEndTime) {
            $res['EnableEndTime'] = $this->enableEndTime;
        }
        if (null !== $this->notifyLevel) {
            $res['NotifyLevel'] = $this->notifyLevel;
        }
        if (null !== $this->applyMode) {
            $res['ApplyMode'] = $this->applyMode;
        }
        if (null !== $this->webhook) {
            $res['Webhook'] = $this->webhook;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyMetricRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SilenceTime'])) {
            $model->silenceTime = $map['SilenceTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }
        if (isset($map['EnableStartTime'])) {
            $model->enableStartTime = $map['EnableStartTime'];
        }
        if (isset($map['EnableEndTime'])) {
            $model->enableEndTime = $map['EnableEndTime'];
        }
        if (isset($map['NotifyLevel'])) {
            $model->notifyLevel = $map['NotifyLevel'];
        }
        if (isset($map['ApplyMode'])) {
            $model->applyMode = $map['ApplyMode'];
        }
        if (isset($map['Webhook'])) {
            $model->webhook = $map['Webhook'];
        }

        return $model;
    }
}
