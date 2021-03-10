<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\Tea\Model;

class CreateConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $refExtId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'refExtId'  => 'RefExtId',
        'requestId' => 'RequestId',
        'bizCode'   => 'BizCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refExtId) {
            $res['RefExtId'] = $this->refExtId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RefExtId'])) {
            $model->refExtId = $map['RefExtId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
