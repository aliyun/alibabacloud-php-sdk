<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListSearchLogResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example [GC (Allocation Failure) 2018-07-19T17:24:20.682+0800: 7516.513: [ParNew: 6604768K->81121K(7341504K), 0.0760606 secs] 7226662K->703015K(31813056K), 0.0762507 secs] [Times: user=0.52 sys=0.00, real=0.07 secs]
     *
     * @var string
     */
    public $content;

    /**
     * @example {"level": "info", "host": "192.168.\*\*.**", "time": "2019-03-18T08:16:12.741Z","content": "[o.e.c.r.a.AllocationService] [MnNASM_] Cluster health status changed from [YELLOW] to [GREEN] (reason: [shards started [[my_index][3]] ...])."}
     *
     * @var mixed[]
     */
    public $contentCollection;

    /**
     * @description Details of the log entry. Different content fields are returned for different log types.
     *
     * @example 192.168.\*\*.**
     *
     * @var string
     */
    public $host;

    /**
     * @example es-cn-n6w1o1x0w001c****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The timestamp when the log is generated. Unit: ms.
     *
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
        'content'           => 'content',
        'contentCollection' => 'contentCollection',
        'host'              => 'host',
        'instanceId'        => 'instanceId',
        'level'             => 'level',
        'timestamp'         => 'timestamp',
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
        if (null !== $this->contentCollection) {
            $res['contentCollection'] = $this->contentCollection;
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
        if (isset($map['contentCollection'])) {
            $model->contentCollection = $map['contentCollection'];
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
