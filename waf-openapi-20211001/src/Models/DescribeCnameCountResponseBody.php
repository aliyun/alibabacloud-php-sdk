<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeCnameCountResponseBody\cnameCount;
use AlibabaCloud\Tea\Model;

class DescribeCnameCountResponseBody extends Model
{
    /**
     * @var cnameCount
     */
    public $cnameCount;

    /**
     * @example F35F45B0-5D6B-4238-BE02-A62D****E840
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnameCount' => 'CnameCount',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnameCount) {
            $res['CnameCount'] = null !== $this->cnameCount ? $this->cnameCount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCnameCountResponseBody
     */
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
