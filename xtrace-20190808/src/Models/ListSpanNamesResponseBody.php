<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListSpanNamesResponseBody\spanNames;

class ListSpanNamesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var spanNames
     */
    public $spanNames;
    protected $_name = [
        'requestId' => 'RequestId',
        'spanNames' => 'SpanNames',
    ];

    public function validate()
    {
        if (null !== $this->spanNames) {
            $this->spanNames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->spanNames) {
            $res['SpanNames'] = null !== $this->spanNames ? $this->spanNames->toArray($noStream) : $this->spanNames;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpanNames'])) {
            $model->spanNames = spanNames::fromMap($map['SpanNames']);
        }

        return $model;
    }
}
