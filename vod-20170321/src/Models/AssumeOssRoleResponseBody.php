<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class AssumeOssRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $ossAuthResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ossAuthResult' => 'OssAuthResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ossAuthResult) {
            $res['OssAuthResult'] = $this->ossAuthResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['OssAuthResult'])) {
            $model->ossAuthResult = $map['OssAuthResult'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
