<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20210728\Models\QueryCopyrightExtractResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 版权水印信息
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'message' => 'Message',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
