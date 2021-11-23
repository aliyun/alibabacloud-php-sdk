<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateAppResponseBody extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $requestId;

    /**
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
