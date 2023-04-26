<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\forbiddenList;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\ignoredList;
use AlibabaCloud\Tea\Model;

class UpdateMediaStorageClassResponseBody extends Model
{
    /**
     * @var forbiddenList
     */
    public $forbiddenList;

    /**
     * @var ignoredList
     */
    public $ignoredList;

    /**
     * @example 30FA0B7C-3A81-5449-93CD-ACA149E6****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Processing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'forbiddenList' => 'ForbiddenList',
        'ignoredList'   => 'IgnoredList',
        'requestId'     => 'RequestId',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenList) {
            $res['ForbiddenList'] = null !== $this->forbiddenList ? $this->forbiddenList->toMap() : null;
        }
        if (null !== $this->ignoredList) {
            $res['IgnoredList'] = null !== $this->ignoredList ? $this->ignoredList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMediaStorageClassResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenList'])) {
            $model->forbiddenList = forbiddenList::fromMap($map['ForbiddenList']);
        }
        if (isset($map['IgnoredList'])) {
            $model->ignoredList = ignoredList::fromMap($map['IgnoredList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
