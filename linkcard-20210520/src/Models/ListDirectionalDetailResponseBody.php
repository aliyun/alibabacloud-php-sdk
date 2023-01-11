<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkcard\V20210520\Models;

use AlibabaCloud\SDK\Linkcard\V20210520\Models\ListDirectionalDetailResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListDirectionalDetailResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example InstanceId cannot be empty.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example InstanceId cannot be empty.
     *
     * @var string
     */
    public $localizedMessage;

    /**
     * @example E4F94B97-1D64-4080-BFD2-67461667AA43
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'data'             => 'Data',
        'errorMessage'     => 'ErrorMessage',
        'localizedMessage' => 'LocalizedMessage',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->localizedMessage) {
            $res['LocalizedMessage'] = $this->localizedMessage;
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
     * @return ListDirectionalDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['LocalizedMessage'])) {
            $model->localizedMessage = $map['LocalizedMessage'];
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
