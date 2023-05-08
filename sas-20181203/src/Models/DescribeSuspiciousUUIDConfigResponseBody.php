<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspiciousUUIDConfigResponseBody extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @example 6044DC07-86F1-5DDA-A611-EC578EA4EEE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $UUIDList;
    protected $_name = [
        'count'     => 'Count',
        'requestId' => 'RequestId',
        'UUIDList'  => 'UUIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->UUIDList) {
            $res['UUIDList'] = $this->UUIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspiciousUUIDConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UUIDList'])) {
            if (!empty($map['UUIDList'])) {
                $model->UUIDList = $map['UUIDList'];
            }
        }

        return $model;
    }
}
