<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody\errorCodeSamples;

use AlibabaCloud\Tea\Model;

class errorCodeSample extends Model
{
    /**
     * @description The returned error code.
     *
     * @example 400
     *
     * @var string
     */
    public $code;

    /**
     * @description The error description.
     *
     * @example The UserId parameter is missing from the request.
     *
     * @var string
     */
    public $description;

    /**
     * @description The returned error message.
     *
     * @example Missing the parameter UserId
     *
     * @var string
     */
    public $message;

    /**
     * @description The model.
     *
     * @example [\\"*\\"]
     *
     * @var string
     */
    public $model;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'message'     => 'Message',
        'model'       => 'Model',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorCodeSample
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
