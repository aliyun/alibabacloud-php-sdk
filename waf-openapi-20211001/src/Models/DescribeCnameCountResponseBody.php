<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponseBody\cnameCount;

class DescribeCnameCountResponseBody extends Model
{
    /**
     * @var cnameCount
     */
    public $cnameCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnameCount' => 'CnameCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cnameCount) {
            $this->cnameCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnameCount) {
            $res['CnameCount'] = null !== $this->cnameCount ? $this->cnameCount->toArray($noStream) : $this->cnameCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CnameCount'])) {
            $model->cnameCount = cnameCount::fromMap($map['CnameCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
