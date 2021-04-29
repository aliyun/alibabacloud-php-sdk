<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class errorLog extends Model
{
    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var string
     */
    public $createTime;
    protected $_name = [
        'errorInfo'  => 'ErrorInfo',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
