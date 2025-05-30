<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\forbiddenList;
use AlibabaCloud\SDK\Vod\V20170321\Models\UpdateMediaStorageClassResponseBody\ignoredList;

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
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'forbiddenList' => 'ForbiddenList',
        'ignoredList' => 'IgnoredList',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->forbiddenList) {
            $this->forbiddenList->validate();
        }
        if (null !== $this->ignoredList) {
            $this->ignoredList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenList) {
            $res['ForbiddenList'] = null !== $this->forbiddenList ? $this->forbiddenList->toArray($noStream) : $this->forbiddenList;
        }

        if (null !== $this->ignoredList) {
            $res['IgnoredList'] = null !== $this->ignoredList ? $this->ignoredList->toArray($noStream) : $this->ignoredList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
