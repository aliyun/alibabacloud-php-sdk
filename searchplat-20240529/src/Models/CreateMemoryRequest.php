<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models;

use AlibabaCloud\Dara\Model;

class CreateMemoryRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var mixed[]
     */
    public $enhancements;

    /**
     * @var mixed
     */
    public $messages;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'agent_id',
        'enhancements' => 'enhancements',
        'messages' => 'messages',
        'runId' => 'run_id',
        'userId' => 'user_id',
    ];

    public function validate()
    {
        if (\is_array($this->enhancements)) {
            Model::validateArray($this->enhancements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agent_id'] = $this->agentId;
        }

        if (null !== $this->enhancements) {
            if (\is_array($this->enhancements)) {
                $res['enhancements'] = [];
                foreach ($this->enhancements as $key1 => $value1) {
                    $res['enhancements'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->messages) {
            $res['messages'] = $this->messages;
        }

        if (null !== $this->runId) {
            $res['run_id'] = $this->runId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
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
        if (isset($map['agent_id'])) {
            $model->agentId = $map['agent_id'];
        }

        if (isset($map['enhancements'])) {
            if (!empty($map['enhancements'])) {
                $model->enhancements = [];
                foreach ($map['enhancements'] as $key1 => $value1) {
                    $model->enhancements[$key1] = $value1;
                }
            }
        }

        if (isset($map['messages'])) {
            $model->messages = $map['messages'];
        }

        if (isset($map['run_id'])) {
            $model->runId = $map['run_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        return $model;
    }
}
