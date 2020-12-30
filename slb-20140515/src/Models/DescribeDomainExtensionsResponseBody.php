<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody\domainExtensions;
use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainExtensions
     */
    public $domainExtensions;
    protected $_name = [
        'requestId'        => 'RequestId',
        'domainExtensions' => 'DomainExtensions',
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
        if (null !== $this->domainExtensions) {
            $res['DomainExtensions'] = null !== $this->domainExtensions ? $this->domainExtensions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainExtensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainExtensions'])) {
            $model->domainExtensions = domainExtensions::fromMap($map['DomainExtensions']);
        }

        return $model;
    }
}
