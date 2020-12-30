<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;
use AlibabaCloud\Tea\Model;

class DescribeDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domain
     */
    public $domain;
    protected $_name = [
        'requestId' => 'RequestId',
        'domain'    => 'Domain',
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
        if (null !== $this->domain) {
            $res['Domain'] = null !== $this->domain ? $this->domain->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = domain::fromMap($map['Domain']);
        }

        return $model;
    }
}
