<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ClearResponseBody extends Model
{
    /**
     * @var string
     */
    public $a1Notation;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'a1Notation' => 'a1Notation',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->a1Notation) {
            $res['a1Notation'] = $this->a1Notation;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['a1Notation'])) {
            $model->a1Notation = $map['a1Notation'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
