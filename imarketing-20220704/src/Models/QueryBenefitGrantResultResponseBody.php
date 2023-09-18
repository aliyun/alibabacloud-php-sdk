<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\QueryBenefitGrantResultResponseBody\model_;
use AlibabaCloud\Tea\Model;

class QueryBenefitGrantResultResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description 123
     *
     * @example true
     *
     * @var bool
     */
    public $debug;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @var model_
     */
    public $model;

    /**
     * @example A53EB3C4-DD25-5B90-9029-4A414877CFFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'debug'     => 'Debug',
        'message'   => 'Message',
        'model'     => 'Model',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->model) {
            $res['Model'] = null !== $this->model ? $this->model->toMap() : null;
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
     * @return QueryBenefitGrantResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Model'])) {
            $model->model = model_::fromMap($map['Model']);
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
