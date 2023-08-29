<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\UploadUserAppToMsaResponseBody\resultContent\data;
use AlibabaCloud\Tea\Model;

class resultContent extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'    => 'Code',
        'data'    => 'Data',
        'extra'   => 'Extra',
        'message' => 'Message',
        'success' => 'Success',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
