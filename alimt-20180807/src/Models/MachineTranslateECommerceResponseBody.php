<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20180807\Models;

use AlibabaCloud\SDK\Alimt\V20180807\Models\MachineTranslateECommerceResponseBody\resultCode;
use AlibabaCloud\Tea\Model;

class MachineTranslateECommerceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultCode
     */
    public $resultCode;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $translateText;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resultCode'    => 'ResultCode',
        'success'       => 'Success',
        'translateText' => 'TranslateText',
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
        if (null !== $this->resultCode) {
            $res['ResultCode'] = null !== $this->resultCode ? $this->resultCode->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->translateText) {
            $res['TranslateText'] = $this->translateText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MachineTranslateECommerceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = resultCode::fromMap($map['ResultCode']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TranslateText'])) {
            $model->translateText = $map['TranslateText'];
        }

        return $model;
    }
}
