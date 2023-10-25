<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody\domainExtensions;
use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionsResponseBody extends Model
{
    /**
     * @description The list of additional certificates.
     *
     * @var domainExtensions
     */
    public $domainExtensions;

    /**
     * @description The ID of the request.
     *
     * @example 48C1B671-C6DB-4DDE-9B30-10557E36CDE0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainExtensions' => 'DomainExtensions',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainExtensions) {
            $res['DomainExtensions'] = null !== $this->domainExtensions ? $this->domainExtensions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainExtensions'])) {
            $model->domainExtensions = domainExtensions::fromMap($map['DomainExtensions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
