<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateContextRequest extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var mixed[]
     */
    public $experience;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var mixed[]
     */
    public $payload;

    /**
     * @var string
     */
    public $triggerCondition;
    protected $_name = [
        'content' => 'content',
        'experience' => 'experience',
        'metadata' => 'metadata',
        'payload' => 'payload',
        'triggerCondition' => 'triggerCondition',
    ];

    public function validate()
    {
        if (\is_array($this->experience)) {
            Model::validateArray($this->experience);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->payload)) {
            Model::validateArray($this->payload);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->experience) {
            if (\is_array($this->experience)) {
                $res['experience'] = [];
                foreach ($this->experience as $key1 => $value1) {
                    $res['experience'][$key1] = $value1;
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

        if (null !== $this->payload) {
            if (\is_array($this->payload)) {
                $res['payload'] = [];
                foreach ($this->payload as $key1 => $value1) {
                    $res['payload'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->triggerCondition) {
            $res['triggerCondition'] = $this->triggerCondition;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['experience'])) {
            if (!empty($map['experience'])) {
                $model->experience = [];
                foreach ($map['experience'] as $key1 => $value1) {
                    $model->experience[$key1] = $value1;
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

        if (isset($map['payload'])) {
            if (!empty($map['payload'])) {
                $model->payload = [];
                foreach ($map['payload'] as $key1 => $value1) {
                    $model->payload[$key1] = $value1;
                }
            }
        }

        if (isset($map['triggerCondition'])) {
            $model->triggerCondition = $map['triggerCondition'];
        }

        return $model;
    }
}
