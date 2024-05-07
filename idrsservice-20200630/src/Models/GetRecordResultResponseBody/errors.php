<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordResultResponseBody;

use AlibabaCloud\Tea\Model;

class errors extends Model
{
    /**
     * @example 0f1c45cd-3eee-4e60-b505-2e330b8755d3
     *
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'field'   => 'Field',
        'message' => 'Message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
