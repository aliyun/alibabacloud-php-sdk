<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkitemFileResponseBody\workitemFile;
use AlibabaCloud\Tea\Model;

class GetWorkitemFileResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @example ASSDS-ASSASX-XSAXSA-XSAXSAXS
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @var workitemFile
     */
    public $workitemFile;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMsg'     => 'errorMsg',
        'requestId'    => 'requestId',
        'success'      => 'success',
        'workitemFile' => 'workitemFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->workitemFile) {
            $res['workitemFile'] = null !== $this->workitemFile ? $this->workitemFile->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkitemFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['workitemFile'])) {
            $model->workitemFile = workitemFile::fromMap($map['workitemFile']);
        }

        return $model;
    }
}
