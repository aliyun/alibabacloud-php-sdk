<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeCdnDomainConfigsResponseBody extends Model
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
     * @example C80705BF-0F76-41FA-BAD1-5B59296A4E59
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainConfigs' => 'DomainConfigs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeCdnDomainConfigsResponseBody
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
