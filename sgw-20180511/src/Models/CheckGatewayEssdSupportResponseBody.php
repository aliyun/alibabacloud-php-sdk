<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class CheckGatewayEssdSupportResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isServiceAffect;

    /**
     * @var bool
     */
    public $isSupportEssd;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'            => 'Code',
        'isServiceAffect' => 'IsServiceAffect',
        'isSupportEssd'   => 'IsSupportEssd',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
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
        if (null !== $this->isServiceAffect) {
            $res['IsServiceAffect'] = $this->isServiceAffect;
        }
        if (null !== $this->isSupportEssd) {
            $res['IsSupportEssd'] = $this->isSupportEssd;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckGatewayEssdSupportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsServiceAffect'])) {
            $model->isServiceAffect = $map['IsServiceAffect'];
        }
        if (isset($map['IsSupportEssd'])) {
            $model->isSupportEssd = $map['IsSupportEssd'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
