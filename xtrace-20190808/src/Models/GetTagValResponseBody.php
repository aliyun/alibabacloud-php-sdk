<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagValResponseBody\tagValues;

class GetTagValResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagValues
     */
    public $tagValues;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
        if (null !== $this->tagValues) {
            $this->tagValues->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagValues) {
            $res['TagValues'] = null !== $this->tagValues ? $this->tagValues->toArray($noStream) : $this->tagValues;
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

        if (isset($map['TagValues'])) {
            $model->tagValues = tagValues::fromMap($map['TagValues']);
        }

        return $model;
    }
}
