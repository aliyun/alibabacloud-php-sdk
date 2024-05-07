<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsResponseBody\data;
use AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsResponseBody\errors;
use AlibabaCloud\Tea\Model;

class ListDetectionsResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description -
     *
     * @var data
     */
    public $data;

    /**
     * @description -
     *
     * @var errors[]
     */
    public $errors;

    /**
     * @example -
     *
     * @var string
     */
    public $message;

    /**
     * @example 59b0bbfe-929b-4a8c-9833-3ce70b4bad38
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'errors'    => 'Errors',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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
        if (null !== $this->errors) {
            $res['Errors'] = [];
            if (null !== $this->errors && \is_array($this->errors)) {
                $n = 0;
                foreach ($this->errors as $item) {
                    $res['Errors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDetectionsResponseBody
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
        if (isset($map['Errors'])) {
            if (!empty($map['Errors'])) {
                $model->errors = [];
                $n             = 0;
                foreach ($map['Errors'] as $item) {
                    $model->errors[$n++] = null !== $item ? errors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
