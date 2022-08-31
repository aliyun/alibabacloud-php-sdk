<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20141111\Models;

use AlibabaCloud\SDK\Cdn\V20141111\Models\DescribeDomainsBySourceResponseBody\domainsList;
use AlibabaCloud\Tea\Model;

class DescribeDomainsBySourceResponseBody extends Model
{
    /**
     * @var domainsList
     */
    public $domainsList;

    /**
     * @var string
     */
    public $requestId;

    /**
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
