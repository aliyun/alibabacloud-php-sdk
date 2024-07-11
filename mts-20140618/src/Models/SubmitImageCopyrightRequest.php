<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class SubmitImageCopyrightRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $message;

    /**
     * @example {"Bucket":"abc-test","Location":"oss-cn-shanghai","Object":"out.jpeg"}
     *
     * @var string
     */
    public $output;

    /**
     * @example {"width":2999, "height":2999, "afa": 3, "type":1, "version":0}
     *
     * @var string
     */
    public $params;
    protected $_name = [
        'message' => 'Message',
        'output'  => 'Output',
        'params'  => 'Params',
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
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitImageCopyrightRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        return $model;
    }
}
