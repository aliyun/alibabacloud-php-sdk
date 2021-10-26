<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResponseBody extends Model
{
    /**
     * @var bool
     */
    public $tagStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $appId;
    protected $_name = [
        'tagStatus' => 'TagStatus',
        'requestId' => 'RequestId',
        'appId'     => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
