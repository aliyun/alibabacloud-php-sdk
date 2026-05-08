<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddContextsRequest;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $categories;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $customInstructions;

    /**
     * @var mixed[]
     */
    public $experience;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var bool
     */
    public $immutable;

    /**
     * @var bool
     */
    public $infer;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var mixed[][]
     */
    public $messages;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $triggerCondition;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'agentId',
        'appId' => 'appId',
        'categories' => 'categories',
        'content' => 'content',
        'customInstructions' => 'customInstructions',
        'experience' => 'experience',
        'expirationDate' => 'expirationDate',
        'immutable' => 'immutable',
        'infer' => 'infer',
        'labels' => 'labels',
        'messages' => 'messages',
        'metadata' => 'metadata',
        'runId' => 'runId',
        'timestamp' => 'timestamp',
        'triggerCondition' => 'triggerCondition',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        if (\is_array($this->experience)) {
            Model::validateArray($this->experience);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['categories'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->customInstructions) {
            $res['customInstructions'] = $this->customInstructions;
        }

        if (null !== $this->experience) {
            if (\is_array($this->experience)) {
                $res['experience'] = [];
                foreach ($this->experience as $key1 => $value1) {
                    $res['experience'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->expirationDate) {
            $res['expirationDate'] = $this->expirationDate;
        }

        if (null !== $this->immutable) {
            $res['immutable'] = $this->immutable;
        }

        if (null !== $this->infer) {
            $res['infer'] = $this->infer;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    if (\is_array($item1)) {
                        $res['messages'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['messages'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        if (null !== $this->triggerCondition) {
            $res['triggerCondition'] = $this->triggerCondition;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['categories'])) {
            if (!empty($map['categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['categories'] as $item1) {
                    $model->categories[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['customInstructions'])) {
            $model->customInstructions = $map['customInstructions'];
        }

        if (isset($map['experience'])) {
            if (!empty($map['experience'])) {
                $model->experience = [];
                foreach ($map['experience'] as $key1 => $value1) {
                    $model->experience[$key1] = $value1;
                }
            }
        }

        if (isset($map['expirationDate'])) {
            $model->expirationDate = $map['expirationDate'];
        }

        if (isset($map['immutable'])) {
            $model->immutable = $map['immutable'];
        }

        if (isset($map['infer'])) {
            $model->infer = $map['infer'];
        }

        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    if (!empty($item1)) {
                        $model->messages[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->messages[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        if (isset($map['triggerCondition'])) {
            $model->triggerCondition = $map['triggerCondition'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
