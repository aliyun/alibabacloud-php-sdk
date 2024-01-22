<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeRunningLogRecordsResponseBody\items;

use AlibabaCloud\Tea\Model;

class logRecords extends Model
{
    /**
     * @description The category of the log entry.
     *
     * @example NETWORK
     *
     * @var string
     */
    public $category;

    /**
     * @description The connection information of the log entry.
     *
     * @example conn18xxxxxx
     *
     * @var string
     */
    public $connInfo;

    /**
     * @description The content of the log entry.
     *
     * @example end connection 11.xxx.xxx.xx:3xxxx (0 connections now open)\n
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the log entry was generated. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-02-26T12:09:34Z
     *
     * @var string
     */
    public $createTime;
    protected $_name = [
        'category'   => 'Category',
        'connInfo'   => 'ConnInfo',
        'content'    => 'Content',
        'createTime' => 'CreateTime',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
