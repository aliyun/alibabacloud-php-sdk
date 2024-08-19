<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\SDK\Green\V20220926\Models\ListImageLibResponseBody\libList;
use AlibabaCloud\Tea\Model;

class ListImageLibResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var libList[]
     */
    public $libList;

    /**
     * @example OK
     *
     * @var string
     */
    public $msg;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
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
        'code'           => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'libList'        => 'LibList',
        'msg'            => 'Msg',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->libList) {
            $res['LibList'] = [];
            if (null !== $this->libList && \is_array($this->libList)) {
                $n = 0;
                foreach ($this->libList as $item) {
                    $res['LibList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
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
     * @return ListImageLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['LibList'])) {
            if (!empty($map['LibList'])) {
                $model->libList = [];
                $n              = 0;
                foreach ($map['LibList'] as $item) {
                    $model->libList[$n++] = null !== $item ? libList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
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
