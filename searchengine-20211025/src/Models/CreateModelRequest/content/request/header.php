<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\CreateModelRequest\content\request;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example Bearer OS-v0********6vvs
     *
     * @var string
     */
    public $authorization;

    /**
     * @example application/json
     *
     * @var string
     */
    public $contentType;
    protected $_name = [
        'authorization' => 'Authorization',
        'contentType' => 'Content-Type',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return header
     */
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
