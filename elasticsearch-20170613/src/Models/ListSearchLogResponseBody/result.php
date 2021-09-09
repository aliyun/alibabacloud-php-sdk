<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var mixed[]
     */
    public $contentCollection;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'level'             => 'level',
        'host'              => 'host',
        'content'           => 'content',
        'timestamp'         => 'timestamp',
        'contentCollection' => 'contentCollection',
        'instanceId'        => 'instanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->contentCollection) {
            $res['contentCollection'] = $this->contentCollection;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['contentCollection'])) {
            $model->contentCollection = $map['contentCollection'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
