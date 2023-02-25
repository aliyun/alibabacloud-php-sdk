<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafDomainDetailResponseBody extends Model
{
    /**
     * @description The information about the accelerated domain name.
     *
     * @var domain
     */
    public $domain;

    /**
     * @description The ID of the request.
     *
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA630
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domain'    => 'Domain',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = null !== $this->domain ? $this->domain->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafDomainDetailResponseBody
     */
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
