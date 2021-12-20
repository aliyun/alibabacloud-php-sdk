<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectObjectRequest extends Model
{
    /**
     * @var SelectRequest
     */
    public $selectRequest;
    protected $_name = [
        'selectRequest' => 'SelectRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectRequest) {
            $res['SelectRequest'] = null !== $this->selectRequest ? $this->selectRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectObjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectRequest'])) {
            $model->selectRequest = SelectRequest::fromMap($map['SelectRequest']);
        }

        return $model;
    }
}
