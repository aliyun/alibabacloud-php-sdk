<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRetcodeAppResponseBody\retcodeAppDataBean;
use AlibabaCloud\Tea\Model;

class CreateRetcodeAppResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $message;

    /**
     * @example A5EC8221-08F2-4C95-9AF1-49FD998C647A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var retcodeAppDataBean
     */
    public $retcodeAppDataBean;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'data'               => 'Data',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'retcodeAppDataBean' => 'RetcodeAppDataBean',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->retcodeAppDataBean) {
            $res['RetcodeAppDataBean'] = null !== $this->retcodeAppDataBean ? $this->retcodeAppDataBean->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRetcodeAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RetcodeAppDataBean'])) {
            $model->retcodeAppDataBean = retcodeAppDataBean::fromMap($map['RetcodeAppDataBean']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
