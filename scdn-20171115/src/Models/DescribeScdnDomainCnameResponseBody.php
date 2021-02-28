<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainCnameResponseBody\cnameDatas;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainCnameResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var cnameDatas
     */
    public $cnameDatas;
    protected $_name = [
        'requestId'  => 'RequestId',
        'cnameDatas' => 'CnameDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cnameDatas) {
            $res['CnameDatas'] = null !== $this->cnameDatas ? $this->cnameDatas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDomainCnameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CnameDatas'])) {
            $model->cnameDatas = cnameDatas::fromMap($map['CnameDatas']);
        }

        return $model;
    }
}
