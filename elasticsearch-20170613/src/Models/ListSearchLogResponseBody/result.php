<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var mixed[]
     */
    public $contentCollection;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'content' => 'content',
        'contentCollection' => 'contentCollection',
        'host' => 'host',
        'instanceId' => 'instanceId',
        'level' => 'level',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->contentCollection)) {
            Model::validateArray($this->contentCollection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->contentCollection) {
            if (\is_array($this->contentCollection)) {
                $res['contentCollection'] = [];
                foreach ($this->contentCollection as $key1 => $value1) {
                    $res['contentCollection'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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

        if (isset($map['contentCollection'])) {
            if (!empty($map['contentCollection'])) {
                $model->contentCollection = [];
                foreach ($map['contentCollection'] as $key1 => $value1) {
                    $model->contentCollection[$key1] = $value1;
                }
            }
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
