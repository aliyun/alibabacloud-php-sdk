<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class GetInvalidDomainCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $invalidDomainCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidDomainCount' => 'InvalidDomainCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->invalidDomainCount) {
            $res['InvalidDomainCount'] = $this->invalidDomainCount;
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
        if (isset($map['InvalidDomainCount'])) {
            $model->invalidDomainCount = $map['InvalidDomainCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
