<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsPullStreamConfigResponseBody\liveAppRecordList;
use AlibabaCloud\Tea\Model;

class DescribeVsPullStreamConfigResponseBody extends Model
{
    /**
     * @var liveAppRecordList
     */
    public $liveAppRecordList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'liveAppRecordList' => 'LiveAppRecordList',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAppRecordList) {
            $res['LiveAppRecordList'] = null !== $this->liveAppRecordList ? $this->liveAppRecordList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVsPullStreamConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAppRecordList'])) {
            $model->liveAppRecordList = liveAppRecordList::fromMap($map['LiveAppRecordList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
