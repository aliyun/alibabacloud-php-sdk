<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class PutWebtrackingRequest extends Model
{
    /**
     * @var string[][]
     */
    public $logs;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'logs' => '__logs__',
        'source' => '__source__',
        'tags' => '__tags__',
        'topic' => '__topic__',
    ];

    public function validate()
    {
        if (\is_array($this->logs)) {
            Model::validateArray($this->logs);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logs) {
            if (\is_array($this->logs)) {
                $res['__logs__'] = [];
                $n1 = 0;
                foreach ($this->logs as $item1) {
                    if (\is_array($item1)) {
                        $res['__logs__'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['__logs__'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->source) {
            $res['__source__'] = $this->source;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['__tags__'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['__tags__'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->topic) {
            $res['__topic__'] = $this->topic;
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
        if (isset($map['__logs__'])) {
            if (!empty($map['__logs__'])) {
                $model->logs = [];
                $n1 = 0;
                foreach ($map['__logs__'] as $item1) {
                    if (!empty($item1)) {
                        $model->logs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->logs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['__source__'])) {
            $model->source = $map['__source__'];
        }

        if (isset($map['__tags__'])) {
            if (!empty($map['__tags__'])) {
                $model->tags = [];
                foreach ($map['__tags__'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['__topic__'])) {
            $model->topic = $map['__topic__'];
        }

        return $model;
    }
}
