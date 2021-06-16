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
    public $sources;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainsList
     */
    public $domainsList;
    protected $_name = [
        'sources'     => 'Sources',
        'requestId'   => 'RequestId',
        'domainsList' => 'DomainsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainsList) {
            $res['DomainsList'] = null !== $this->domainsList ? $this->domainsList->toMap() : null;
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
        if (isset($map['Sources'])) {
            $model->sources = $map['Sources'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainsList'])) {
            $model->domainsList = domainsList::fromMap($map['DomainsList']);
        }

        return $model;
    }
}
