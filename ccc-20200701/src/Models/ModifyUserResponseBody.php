<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ModifyUserResponseBody extends Model
{
    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $params;
    protected $_name = [
        'httpStatusCode' => 'HttpStatusCode',
        'code'           => 'Code',
        'message'        => 'Message',
        'data'           => 'Data',
        'requestId'      => 'RequestId',
        'params'         => 'Params',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = $map['Params'];
            }
        }

        return $model;
    }
}
