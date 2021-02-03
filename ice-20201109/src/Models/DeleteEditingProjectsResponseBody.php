<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteEditingProjectsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ignoredList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ignoredList' => 'IgnoredList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ignoredList) {
            $res['IgnoredList'] = $this->ignoredList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEditingProjectsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IgnoredList'])) {
            $model->ignoredList = $map['IgnoredList'];
        }

        return $model;
    }
}
