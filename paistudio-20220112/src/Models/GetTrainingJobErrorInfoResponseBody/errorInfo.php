<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobErrorInfoResponseBody;

use AlibabaCloud\Tea\Model;

class errorInfo extends Model
{
    /**
     * @example additional info
     *
     * @var string
     */
    public $additionalInfo;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example success
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'additionalInfo' => 'AdditionalInfo',
        'code' => 'Code',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalInfo) {
            $res['AdditionalInfo'] = $this->additionalInfo;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalInfo'])) {
            $model->additionalInfo = $map['AdditionalInfo'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
