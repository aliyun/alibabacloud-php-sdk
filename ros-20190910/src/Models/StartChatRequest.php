<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\StartChatRequest\attachments;

class StartChatRequest extends Model
{
    /**
     * @var string
     */
    public $agentVersion;

    /**
     * @var attachments[]
     */
    public $attachments;

    /**
     * @var bool
     */
    public $enablePartialMessage;

    /**
     * @var bool
     */
    public $enableThinking;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentVersion' => 'AgentVersion',
        'attachments' => 'Attachments',
        'enablePartialMessage' => 'EnablePartialMessage',
        'enableThinking' => 'EnableThinking',
        'mode' => 'Mode',
        'query' => 'Query',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (\is_array($this->attachments)) {
            Model::validateArray($this->attachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }

        if (null !== $this->attachments) {
            if (\is_array($this->attachments)) {
                $res['Attachments'] = [];
                $n1 = 0;
                foreach ($this->attachments as $item1) {
                    $res['Attachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enablePartialMessage) {
            $res['EnablePartialMessage'] = $this->enablePartialMessage;
        }

        if (null !== $this->enableThinking) {
            $res['EnableThinking'] = $this->enableThinking;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }

        if (isset($map['Attachments'])) {
            if (!empty($map['Attachments'])) {
                $model->attachments = [];
                $n1 = 0;
                foreach ($map['Attachments'] as $item1) {
                    $model->attachments[$n1] = attachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnablePartialMessage'])) {
            $model->enablePartialMessage = $map['EnablePartialMessage'];
        }

        if (isset($map['EnableThinking'])) {
            $model->enableThinking = $map['EnableThinking'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
