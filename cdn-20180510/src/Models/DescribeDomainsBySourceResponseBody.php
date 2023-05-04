<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;
use AlibabaCloud\Tea\Model;

class DescribeDomainsBySourceResponseBody extends Model
{
    /**
     * @description The domain names corresponding to each origin server.
     *
     * @var domainsList
     */
    public $domainsList;

    /**
     * @description The ID of the request.
     *
     * @example B0F074E5-A1AC-4B32-8EA2-6F450410D1E0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The origin servers.
     *
     * @example example.com,aliyundoc.com
     *
     * @var string
     */
    public $sources;
    protected $_name = [
        'domainsList' => 'DomainsList',
        'requestId'   => 'RequestId',
        'sources'     => 'Sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainsList) {
            $res['DomainsList'] = null !== $this->domainsList ? $this->domainsList->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainsBySourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainsList'])) {
            $model->domainsList = domainsList::fromMap($map['DomainsList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
