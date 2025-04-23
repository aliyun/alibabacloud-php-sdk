<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetModelResponseBody\result\content\request;

use AlibabaCloud\Dara\Model;

class header extends Model
{
    /**
     * @var string
     */
    public $authorization;

    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'authorization' => 'Authorization',
        'contentType' => 'Content-Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorization) {
            $res['Authorization'] = $this->authorization;
        }

        if (null !== $this->contentType) {
            $res['Content-Type'] = $this->contentType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Authorization'])) {
            $model->authorization = $map['Authorization'];
        }

        if (isset($map['Content-Type'])) {
            $model->contentType = $map['Content-Type'];
        }

        return $model;
    }
}
