<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspiciousUUIDConfigResponseBody extends Model
{
    /**
     * @description The total number of servers on which proactive defense of the specified type takes effect.
     *
     * @example 2
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6044DC07-86F1-5DDA-A611-EC578EA4EEE6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The UUIDs of servers on which proactive defense of the specified type takes effect.
     *
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
