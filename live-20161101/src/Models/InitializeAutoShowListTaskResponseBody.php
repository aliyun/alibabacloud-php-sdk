<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class InitializeAutoShowListTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $streamList;
    protected $_name = [
        'casterId'   => 'CasterId',
        'requestId'  => 'RequestId',
        'streamList' => 'StreamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->streamList) {
            $res['StreamList'] = $this->streamList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitializeAutoShowListTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StreamList'])) {
            $model->streamList = $map['StreamList'];
        }

        return $model;
    }
}
