<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\RestoreMediaResponseBody\forbiddenList;
use AlibabaCloud\SDK\Vod\V20170321\Models\RestoreMediaResponseBody\ignoredList;
use AlibabaCloud\Tea\Model;

class RestoreMediaResponseBody extends Model
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
     * @example 8E70E3F8-E2EE-47BC-4677-379D6F28****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'forbiddenList' => 'ForbiddenList',
        'ignoredList'   => 'IgnoredList',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RestoreMediaResponseBody
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
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
