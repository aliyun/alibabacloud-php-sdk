<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteMediaInfosResponseBody extends Model
{
    /**
     * @description The IDs or URLs of media assets that cannot be deleted. Generally, media assets cannot be deleted if you do not have the required permissions.
     *
     * @var string[]
     */
    public $forbiddenList;

    /**
     * @description The IDs or URLs of ignored media assets. An error occurred while obtaining such media assets.
     *
     * @var string[]
     */
    public $ignoredList;

    /**
     * @description The request ID.
     *
     * @example 0622C702-41BE-467E-AF2E-883D4517962E
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
     * @return DeleteMediaInfosResponseBody
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
