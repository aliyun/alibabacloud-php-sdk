<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashLogResponseBody;

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
    public $content;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'level'      => 'level',
        'content'    => 'content',
        'timestamp'  => 'timestamp',
        'instanceId' => 'instanceId',
        'host'       => 'host',
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
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        return $model;
    }
}
