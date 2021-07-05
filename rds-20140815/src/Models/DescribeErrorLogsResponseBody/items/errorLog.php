<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponseBody\items;

use AlibabaCloud\Tea\Model;

class errorLog extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $errorInfo;
    protected $_name = [
        'createTime' => 'CreateTime',
        'errorInfo'  => 'ErrorInfo',
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
        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        return $model;
    }
}
