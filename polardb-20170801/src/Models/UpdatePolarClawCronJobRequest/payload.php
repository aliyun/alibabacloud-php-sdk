<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\UpdatePolarClawCronJobRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var bool
     */
    public $bestEffortDeliver;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var bool
     */
    public $deliver;

    /**
     * @var string[]
     */
    public $fallbacks;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var bool
     */
    public $lightContext;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $thinking;

    /**
     * @var int
     */
    public $timeoutSeconds;

    /**
     * @var string
     */
    public $to;
    protected $_name = [
        'bestEffortDeliver' => 'BestEffortDeliver',
        'channel' => 'Channel',
        'deliver' => 'Deliver',
        'fallbacks' => 'Fallbacks',
        'kind' => 'Kind',
        'lightContext' => 'LightContext',
        'message' => 'Message',
        'model' => 'Model',
        'text' => 'Text',
        'thinking' => 'Thinking',
        'timeoutSeconds' => 'TimeoutSeconds',
        'to' => 'To',
    ];

    public function validate()
    {
        if (\is_array($this->fallbacks)) {
            Model::validateArray($this->fallbacks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bestEffortDeliver) {
            $res['BestEffortDeliver'] = $this->bestEffortDeliver;
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->deliver) {
            $res['Deliver'] = $this->deliver;
        }

        if (null !== $this->fallbacks) {
            if (\is_array($this->fallbacks)) {
                $res['Fallbacks'] = [];
                $n1 = 0;
                foreach ($this->fallbacks as $item1) {
                    $res['Fallbacks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }

        if (null !== $this->lightContext) {
            $res['LightContext'] = $this->lightContext;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->thinking) {
            $res['Thinking'] = $this->thinking;
        }

        if (null !== $this->timeoutSeconds) {
            $res['TimeoutSeconds'] = $this->timeoutSeconds;
        }

        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['BestEffortDeliver'])) {
            $model->bestEffortDeliver = $map['BestEffortDeliver'];
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['Deliver'])) {
            $model->deliver = $map['Deliver'];
        }

        if (isset($map['Fallbacks'])) {
            if (!empty($map['Fallbacks'])) {
                $model->fallbacks = [];
                $n1 = 0;
                foreach ($map['Fallbacks'] as $item1) {
                    $model->fallbacks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }

        if (isset($map['LightContext'])) {
            $model->lightContext = $map['LightContext'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Thinking'])) {
            $model->thinking = $map['Thinking'];
        }

        if (isset($map['TimeoutSeconds'])) {
            $model->timeoutSeconds = $map['TimeoutSeconds'];
        }

        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
