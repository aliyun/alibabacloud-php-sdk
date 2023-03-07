<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClusterLogsResponseBody\logs;

use AlibabaCloud\Tea\Model;

class logInfo extends Model
{
    /**
     * @description The time when the log was created.
     *
     * @example 2019-09-18T13:24:13.000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The severity level of the log entry.
     *
     * @example info
     *
     * @var string
     */
    public $level;

    /**
     * @description The content of the log entry.
     *
     * @example Begin to create cluster
     *
     * @var string
     */
    public $message;

    /**
     * @description The name of the operation.
     *
     * @example CreateCluster
     *
     * @var string
     */
    public $operation;
    protected $_name = [
        'createTime' => 'CreateTime',
        'level'      => 'Level',
        'message'    => 'Message',
        'operation'  => 'Operation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
