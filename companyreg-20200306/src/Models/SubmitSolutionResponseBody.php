<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models;

use AlibabaCloud\Tea\Model;

class SubmitSolutionResponseBody extends Model
{
    /**
     * @example https://companyreg.console.aliyun.com/#/intention-notarize?Type=119&bizid=I20220114181457000001
     *
     * @var string
     */
    public $confirmUrl;

    /**
     * @example NoPermission
     *
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @example 0A3CFCF5-E0C0-5C0B-A2ED-03827F16D85F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example S20211109140729000001
     *
     * @var string
     */
    public $solutionBizId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'confirmUrl'    => 'ConfirmUrl',
        'errorCode'     => 'ErrorCode',
        'errorMsg'      => 'ErrorMsg',
        'requestId'     => 'RequestId',
        'solutionBizId' => 'SolutionBizId',
        'success'       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->confirmUrl) {
            $res['ConfirmUrl'] = $this->confirmUrl;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->solutionBizId) {
            $res['SolutionBizId'] = $this->solutionBizId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSolutionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfirmUrl'])) {
            $model->confirmUrl = $map['ConfirmUrl'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SolutionBizId'])) {
            $model->solutionBizId = $map['SolutionBizId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
