<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Apds\V20220331\Models;

use AlibabaCloud\Tea\Model;

class CreateFileJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $error;
    protected $_name = [
        'code'    => 'Code',
        'data'    => 'Data',
        'success' => 'Success',
        'error'   => 'error',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        return $model;
    }
}
