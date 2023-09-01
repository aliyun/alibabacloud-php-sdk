<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponseBody;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @example Create Failed
     *
     * @var string
     */
    public $message;

    /**
     * @example CREATING
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'    => 'Code',
        'message' => 'Message',
        'type'    => 'Type',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conditions
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
