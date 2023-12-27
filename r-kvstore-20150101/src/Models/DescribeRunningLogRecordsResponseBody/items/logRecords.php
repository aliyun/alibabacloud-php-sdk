<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeRunningLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
{
    /**
     * @description The content of the log.
     *
     * @example CONFIG REWRITE executed with success.
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the log was generated. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2018-12-03T07:07:30Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the node.
     *
     * >  If a standard instance is queried, `(null)` is returned.
     * @example r-bp1zxszhcgatnx****-db-0
     *
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
