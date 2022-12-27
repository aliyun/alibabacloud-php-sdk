<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCnameResponseBody\cnameDatas;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainCnameResponseBody extends Model
{
    /**
     * @var cnameDatas
     */
    public $cnameDatas;

    /**
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnameDatas' => 'CnameDatas',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnameDatas) {
            $res['CnameDatas'] = null !== $this->cnameDatas ? $this->cnameDatas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainCnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnameDatas'])) {
            $model->cnameDatas = cnameDatas::fromMap($map['CnameDatas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
