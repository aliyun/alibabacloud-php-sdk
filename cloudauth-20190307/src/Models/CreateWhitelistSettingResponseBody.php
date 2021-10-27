<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CreateWhitelistSettingResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resultObject;
    protected $_name = [
        'requestId'    => 'RequestId',
        'resultObject' => 'ResultObject',
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
        if (null !== $this->resultObject) {
            $res['ResultObject'] = $this->resultObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWhitelistSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultObject'])) {
            $model->resultObject = $map['ResultObject'];
        }

        return $model;
    }
}
