<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeletePlayInfoResponseBody extends Model
{
    /**
     * @description The URLs of the media streams that cannot be deleted. Generally, media streams cannot be deleted if you do not have the required permissions.
     *
     * @var string[]
     */
    public $forbiddenList;

    /**
     * @description The URLs of ignored media streams. An error occurred while obtaining such media assets because the IDs or URLs of the media assets do not exist.
     *
     * @var string[]
     */
    public $ignoredList;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenList' => 'ForbiddenList',
        'ignoredList'   => 'IgnoredList',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenList) {
            $res['ForbiddenList'] = $this->forbiddenList;
        }
        if (null !== $this->ignoredList) {
            $res['IgnoredList'] = $this->ignoredList;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePlayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenList'])) {
            if (!empty($map['ForbiddenList'])) {
                $model->forbiddenList = $map['ForbiddenList'];
            }
        }
        if (isset($map['IgnoredList'])) {
            if (!empty($map['IgnoredList'])) {
                $model->ignoredList = $map['IgnoredList'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
