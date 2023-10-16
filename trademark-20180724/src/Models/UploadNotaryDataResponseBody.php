<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class UploadNotaryDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $userAuthUrl;
    protected $_name = [
        'requestId'   => 'RequestId',
        'userAuthUrl' => 'UserAuthUrl',
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
        if (null !== $this->userAuthUrl) {
            $res['UserAuthUrl'] = $this->userAuthUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadNotaryDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserAuthUrl'])) {
            $model->userAuthUrl = $map['UserAuthUrl'];
        }

        return $model;
    }
}
