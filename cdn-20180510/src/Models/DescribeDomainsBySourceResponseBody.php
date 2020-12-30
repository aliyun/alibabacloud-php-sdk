<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;
use AlibabaCloud\Tea\Model;

class DescribeDomainsBySourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainsList
     */
    public $domainsList;

    /**
     * @var string
     */
    public $sources;
    protected $_name = [
        'requestId'   => 'RequestId',
        'domainsList' => 'DomainsList',
        'sources'     => 'Sources',
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
        if (null !== $this->domainsList) {
            $res['DomainsList'] = null !== $this->domainsList ? $this->domainsList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainsList'])) {
            $model->domainsList = domainsList::fromMap($map['DomainsList']);
        }
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }

        return $model;
    }
}
