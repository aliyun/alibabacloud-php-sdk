<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListRestQueryResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result' => 'result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
