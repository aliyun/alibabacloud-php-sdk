<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class UpdatePartProductResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isSuccess' => 'isSuccess',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['isSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePartProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isSuccess'])) {
            $model->isSuccess = $map['isSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
