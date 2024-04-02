<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebsiteIndexPageBaselineResponseBody extends Model
{
    /**
     * @var string
     */
    public $baseLineStatus;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $snapshot;
    protected $_name = [
        'baseLineStatus' => 'BaseLineStatus',
        'createTime'     => 'CreateTime',
        'requestId'      => 'RequestId',
        'snapshot'       => 'Snapshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseLineStatus) {
            $res['BaseLineStatus'] = $this->baseLineStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshot) {
            $res['Snapshot'] = $this->snapshot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebsiteIndexPageBaselineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseLineStatus'])) {
            $model->baseLineStatus = $map['BaseLineStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = $map['Snapshot'];
        }

        return $model;
    }
}
