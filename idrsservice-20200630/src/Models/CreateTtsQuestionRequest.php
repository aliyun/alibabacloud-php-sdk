<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\CreateTtsQuestionRequest\request;
use AlibabaCloud\Tea\Model;

class CreateTtsQuestionRequest extends Model
{
    /**
     * @var request
     */
    public $request;
    protected $_name = [
        'request' => 'Request',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->request) {
            $res['Request'] = null !== $this->request ? $this->request->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTtsQuestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Request'])) {
            $model->request = request::fromMap($map['Request']);
        }

        return $model;
    }
}
