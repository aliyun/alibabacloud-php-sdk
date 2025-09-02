<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateBaselineRequest\alertSettings\dingRobots;

class alertSettings extends Model
{
    /**
     * @var int
     */
    public $alertInterval;

    /**
     * @var int
     */
    public $alertMaximum;

    /**
     * @var string[]
     */
    public $alertMethods;

    /**
     * @var string
     */
    public $alertRecipient;

    /**
     * @var string
     */
    public $alertRecipientType;

    /**
     * @var string
     */
    public $alertType;

    /**
     * @var bool
     */
    public $baselineAlertEnabled;

    /**
     * @var dingRobots[]
     */
    public $dingRobots;

    /**
     * @var string
     */
    public $silenceEndTime;

    /**
     * @var string
     */
    public $silenceStartTime;

    /**
     * @var string[]
     */
    public $topicTypes;

    /**
     * @var string[]
     */
    public $webhooks;
    protected $_name = [
        'alertInterval' => 'AlertInterval',
        'alertMaximum' => 'AlertMaximum',
        'alertMethods' => 'AlertMethods',
        'alertRecipient' => 'AlertRecipient',
        'alertRecipientType' => 'AlertRecipientType',
        'alertType' => 'AlertType',
        'baselineAlertEnabled' => 'BaselineAlertEnabled',
        'dingRobots' => 'DingRobots',
        'silenceEndTime' => 'SilenceEndTime',
        'silenceStartTime' => 'SilenceStartTime',
        'topicTypes' => 'TopicTypes',
        'webhooks' => 'Webhooks',
    ];

    public function validate()
    {
        if (\is_array($this->alertMethods)) {
            Model::validateArray($this->alertMethods);
        }
        if (\is_array($this->dingRobots)) {
            Model::validateArray($this->dingRobots);
        }
        if (\is_array($this->topicTypes)) {
            Model::validateArray($this->topicTypes);
        }
        if (\is_array($this->webhooks)) {
            Model::validateArray($this->webhooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertInterval) {
            $res['AlertInterval'] = $this->alertInterval;
        }

        if (null !== $this->alertMaximum) {
            $res['AlertMaximum'] = $this->alertMaximum;
        }

        if (null !== $this->alertMethods) {
            if (\is_array($this->alertMethods)) {
                $res['AlertMethods'] = [];
                $n1 = 0;
                foreach ($this->alertMethods as $item1) {
                    $res['AlertMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->alertRecipient) {
            $res['AlertRecipient'] = $this->alertRecipient;
        }

        if (null !== $this->alertRecipientType) {
            $res['AlertRecipientType'] = $this->alertRecipientType;
        }

        if (null !== $this->alertType) {
            $res['AlertType'] = $this->alertType;
        }

        if (null !== $this->baselineAlertEnabled) {
            $res['BaselineAlertEnabled'] = $this->baselineAlertEnabled;
        }

        if (null !== $this->dingRobots) {
            if (\is_array($this->dingRobots)) {
                $res['DingRobots'] = [];
                $n1 = 0;
                foreach ($this->dingRobots as $item1) {
                    $res['DingRobots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->silenceEndTime) {
            $res['SilenceEndTime'] = $this->silenceEndTime;
        }

        if (null !== $this->silenceStartTime) {
            $res['SilenceStartTime'] = $this->silenceStartTime;
        }

        if (null !== $this->topicTypes) {
            if (\is_array($this->topicTypes)) {
                $res['TopicTypes'] = [];
                $n1 = 0;
                foreach ($this->topicTypes as $item1) {
                    $res['TopicTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->webhooks) {
            if (\is_array($this->webhooks)) {
                $res['Webhooks'] = [];
                $n1 = 0;
                foreach ($this->webhooks as $item1) {
                    $res['Webhooks'][$n1] = $item1;
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
        if (isset($map['AlertInterval'])) {
            $model->alertInterval = $map['AlertInterval'];
        }

        if (isset($map['AlertMaximum'])) {
            $model->alertMaximum = $map['AlertMaximum'];
        }

        if (isset($map['AlertMethods'])) {
            if (!empty($map['AlertMethods'])) {
                $model->alertMethods = [];
                $n1 = 0;
                foreach ($map['AlertMethods'] as $item1) {
                    $model->alertMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AlertRecipient'])) {
            $model->alertRecipient = $map['AlertRecipient'];
        }

        if (isset($map['AlertRecipientType'])) {
            $model->alertRecipientType = $map['AlertRecipientType'];
        }

        if (isset($map['AlertType'])) {
            $model->alertType = $map['AlertType'];
        }

        if (isset($map['BaselineAlertEnabled'])) {
            $model->baselineAlertEnabled = $map['BaselineAlertEnabled'];
        }

        if (isset($map['DingRobots'])) {
            if (!empty($map['DingRobots'])) {
                $model->dingRobots = [];
                $n1 = 0;
                foreach ($map['DingRobots'] as $item1) {
                    $model->dingRobots[$n1] = dingRobots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SilenceEndTime'])) {
            $model->silenceEndTime = $map['SilenceEndTime'];
        }

        if (isset($map['SilenceStartTime'])) {
            $model->silenceStartTime = $map['SilenceStartTime'];
        }

        if (isset($map['TopicTypes'])) {
            if (!empty($map['TopicTypes'])) {
                $model->topicTypes = [];
                $n1 = 0;
                foreach ($map['TopicTypes'] as $item1) {
                    $model->topicTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Webhooks'])) {
            if (!empty($map['Webhooks'])) {
                $model->webhooks = [];
                $n1 = 0;
                foreach ($map['Webhooks'] as $item1) {
                    $model->webhooks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
