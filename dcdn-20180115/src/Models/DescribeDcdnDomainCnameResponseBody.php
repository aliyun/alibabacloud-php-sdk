<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainCnameResponseBody\cnameDatas;

class DescribeDcdnDomainCnameResponseBody extends Model
{
    /**
     * @var cnameDatas
     */
    public $cnameDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnameDatas' => 'CnameDatas',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->cnameDatas) {
            $this->cnameDatas->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnameDatas) {
            $res['CnameDatas'] = null !== $this->cnameDatas ? $this->cnameDatas->toArray($noStream) : $this->cnameDatas;
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
        if (isset($map['CnameDatas'])) {
            $model->cnameDatas = cnameDatas::fromMap($map['CnameDatas']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
