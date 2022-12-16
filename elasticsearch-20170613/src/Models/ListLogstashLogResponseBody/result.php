<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListLogstashLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example [logstash.outputs.fileextend] Opening file {:path=>\"/ssd/1/ls-cn-v0h1kzca****\/logstash/logs/debug/test\"}
     *
     * @var string
     */
    public $content;

    /**
     * @example 192.168.xx.xx
     *
     * @var string
     */
    public $host;

    /**
     * @example ls-cn-v0h1kzca****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example info
     *
     * @var string
     */
    public $level;

    /**
     * @example 1531985112420
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'content'    => 'content',
        'host'       => 'host',
        'instanceId' => 'instanceId',
        'level'      => 'level',
        'timestamp'  => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
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
