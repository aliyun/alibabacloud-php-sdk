<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\ListDetectionsResponseBody;

use AlibabaCloud\Tea\Model;

class errors extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $field;
    protected $_name = [
        'message' => 'Message',
        'field'   => 'Field',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->field) {
            $res['Field'] = $this->field;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        return $model;
    }
}
