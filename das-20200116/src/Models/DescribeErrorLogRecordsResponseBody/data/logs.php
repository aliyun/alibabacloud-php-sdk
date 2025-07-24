<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsResponseBody\data;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @example NETWORK
     *
     * @var string
     */
    public $category;

    /**
     * @example conn18xxxxxx
     *
     * @var string
     */
    public $connInfo;

    /**
     * @example 2025-07-15T15:14:27.175188+08:00 0 [Note] [MY-012468] [InnoDB] Transactions deadlock detected, dumping detailed information.
     *
     * @var string
     */
    public $content;

    /**
     * @example 1731983067000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example d-bp128a003436****
     *
     * @var string
     */
    public $DBInstanceName;
    protected $_name = [
        'category' => 'Category',
        'connInfo' => 'ConnInfo',
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'DBInstanceName' => 'DBInstanceName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->connInfo) {
            $res['ConnInfo'] = $this->connInfo;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ConnInfo'])) {
            $model->connInfo = $map['ConnInfo'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        return $model;
    }
}
