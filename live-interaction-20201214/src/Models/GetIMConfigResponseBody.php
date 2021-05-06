<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result;
use AlibabaCloud\Tea\Model;

class GetIMConfigResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @description 错误码
     *
     * @var string
     */
    public $code;

    /**
     * @description 网络错误码
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description 错误信息
     *
     * @var string
     */
    public $messaage;

    /**
     * @description 返回结果
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'requestId'      => 'RequestId',
        'success'        => 'Success',
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'messaage'       => 'Messaage',
        'result'         => 'Result',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->messaage) {
            $res['Messaage'] = $this->messaage;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIMConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Messaage'])) {
            $model->messaage = $map['Messaage'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
