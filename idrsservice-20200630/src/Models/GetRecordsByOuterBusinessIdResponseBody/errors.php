<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetRecordsByOuterBusinessIdResponseBody;

use AlibabaCloud\Tea\Model;

class errors extends Model
{
    /**
     * @example A1899517-BB99-5D3E-A71B-97524DCB0***
     *
     * @var string
     */
    public $field;

    /**
     * @example -
     *
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
