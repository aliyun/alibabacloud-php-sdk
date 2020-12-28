<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListClusterLogsResponseBody;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $level;
    protected $_name = [
        'operation'  => 'Operation',
        'createTime' => 'CreateTime',
        'message'    => 'Message',
        'level'      => 'Level',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        return $model;
    }
}
