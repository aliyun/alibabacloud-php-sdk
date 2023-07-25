<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainConfigsResponseBody extends Model
{
    /**
     * @description The configurations of the domain name.
     *
     * @var domainConfigs
     */
    public $domainConfigs;

    /**
     * @description The ID of the request.
     *
     * @example F8AA0364-0FDB-4AD5-AC74-D69FAB8924ED
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = null !== $this->domainConfigs ? $this->domainConfigs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigs'])) {
            $model->domainConfigs = domainConfigs::fromMap($map['DomainConfigs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
