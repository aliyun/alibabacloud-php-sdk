<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class CreateSelectObjectMetaRequest extends Model
{
    /**
     * @var SelectMetaRequest
     */
    public $selectMetaRequest;
    protected $_name = [
        'selectMetaRequest' => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectMetaRequest) {
            $res['body'] = null !== $this->selectMetaRequest ? $this->selectMetaRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSelectObjectMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->selectMetaRequest = SelectMetaRequest::fromMap($map['body']);
        }

        return $model;
    }
}
