<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResponseBody extends Model
{
    /**
     * @example 20112314518278
     *
     * @var int
     */
    public $appId;

    /**
     * @example BA20890E-75C7-41BC-9C8B-73276B58F550
     *
     * @var string
     */
    public $requestId;

    /**
     * @example false
     *
     * @var bool
     */
    public $tagStatus;
    protected $_name = [
        'appId'     => 'AppId',
        'requestId' => 'RequestId',
        'tagStatus' => 'TagStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}
