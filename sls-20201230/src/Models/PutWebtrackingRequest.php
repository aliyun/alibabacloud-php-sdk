<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

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
        'logs'   => '__logs__',
        'source' => '__source__',
        'tags'   => '__tags__',
        'topic'  => '__topic__',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logs) {
            $res['__logs__'] = $this->logs;
        }
        if (null !== $this->source) {
            $res['__source__'] = $this->source;
        }
        if (null !== $this->tags) {
            $res['__tags__'] = $this->tags;
        }
        if (null !== $this->topic) {
            $res['__topic__'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutWebtrackingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['__logs__'])) {
            if (!empty($map['__logs__'])) {
                $model->logs = $map['__logs__'];
            }
        }
        if (isset($map['__source__'])) {
            $model->source = $map['__source__'];
        }
        if (isset($map['__tags__'])) {
            $model->tags = $map['__tags__'];
        }
        if (isset($map['__topic__'])) {
            $model->topic = $map['__topic__'];
        }

        return $model;
    }
}
