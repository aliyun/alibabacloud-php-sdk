<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainsBySourceResponseBody\domainsList;

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
        'requestId' => 'RequestId',
        'sources' => 'Sources',
    ];

    public function validate()
    {
        if (null !== $this->domainsList) {
            $this->domainsList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainsList) {
            $res['DomainsList'] = null !== $this->domainsList ? $this->domainsList->toArray($noStream) : $this->domainsList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sources) {
            $res['Sources'] = $this->sources;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
