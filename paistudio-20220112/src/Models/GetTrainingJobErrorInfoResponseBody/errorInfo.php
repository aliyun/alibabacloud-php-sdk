<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobErrorInfoResponseBody;

use AlibabaCloud\Dara\Model;

class errorInfo extends Model
{
    /**
     * @var string
     */
    public $additionalInfo;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'additionalInfo' => 'AdditionalInfo',
        'code' => 'Code',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
