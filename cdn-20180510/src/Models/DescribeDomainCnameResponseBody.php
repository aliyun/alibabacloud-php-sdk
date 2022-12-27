<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainCnameResponseBody\cnameDatas;
use AlibabaCloud\Tea\Model;

class DescribeDomainCnameResponseBody extends Model
{
    /**
     * @var cnameDatas
     */
    public $cnameDatas;

    /**
     * @example 06D29681-B7CD-4034-A8CC-28AFFA213539
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
     * @return DescribeDomainCnameResponseBody
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
