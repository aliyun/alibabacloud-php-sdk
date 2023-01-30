<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\errorCodeSamples;

use AlibabaCloud\Tea\Model;

class errorCodeSample extends Model
{
    /**
     * @description The error code.
     *
     * @example 400
     *
     * @var string
     */
    public $code;

    /**
     * @description The description.
     *
     * @example Missing the parameter UserId
     *
     * @var string
     */
    public $description;

    /**
     * @description The error message.
     *
     * @example MissingParameter
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'        => 'Code',
        'description' => 'Description',
        'message'     => 'Message',
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

        return $model;
    }
}
