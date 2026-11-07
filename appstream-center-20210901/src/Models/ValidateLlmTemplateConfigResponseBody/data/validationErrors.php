<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ValidateLlmTemplateConfigResponseBody\data;

use AlibabaCloud\Dara\Model;

class validationErrors extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'field' => 'Field',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->field) {
            $res['Field'] = $this->field;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
