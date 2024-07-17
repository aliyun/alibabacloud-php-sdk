<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class PushDocumentsRequest extends Model
{
    /**
     * @description The request body.
     *
     * @var mixed[]
     */
    public $body;

    /**
     * @description The primary key field.
     *
     * @example id
     *
     * @var string
     */
    public $pkField;
    protected $_name = [
        'body'    => 'body',
        'pkField' => 'pkField',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->pkField) {
            $res['pkField'] = $this->pkField;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushDocumentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = $map['body'];
            }
        }
        if (isset($map['pkField'])) {
            $model->pkField = $map['pkField'];
        }

        return $model;
    }
}
