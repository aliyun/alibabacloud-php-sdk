<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain;

class DescribeDcdnWafDomainDetailResponseBody extends Model
{
    /**
     * @var domain
     */
    public $domain;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domain' => 'Domain',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->domain) {
            $this->domain->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = null !== $this->domain ? $this->domain->toArray($noStream) : $this->domain;
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
        if (isset($map['Domain'])) {
            $model->domain = domain::fromMap($map['Domain']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
