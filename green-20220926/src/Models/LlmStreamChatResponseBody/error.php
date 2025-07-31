<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\LlmStreamChatResponseBody;

use AlibabaCloud\Tea\Model;

class error extends Model
{
    /**
     * @example data_inspection_failed
     *
     * @var string
     */
    public $code;

    /**
     * @example Input data may contain inappropriate content.
     *
     * @var string
     */
    public $message;

    /**
     * @example null
     *
     * @var string
     */
    public $param;

    /**
     * @example data_inspection_failed
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'param' => 'Param',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->param) {
            $res['Param'] = $this->param;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return error
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Param'])) {
            $model->param = $map['Param'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
