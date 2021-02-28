<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainConfigsResponseBody\domainConfigs;
use AlibabaCloud\Tea\Model;

class DescribeScdnDomainConfigsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainConfigs
     */
    public $domainConfigs;
    protected $_name = [
        'requestId'     => 'RequestId',
        'domainConfigs' => 'DomainConfigs',
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
        if (null !== $this->domainConfigs) {
            $res['DomainConfigs'] = null !== $this->domainConfigs ? $this->domainConfigs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDomainConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainConfigs'])) {
            $model->domainConfigs = domainConfigs::fromMap($map['DomainConfigs']);
        }

        return $model;
    }
}
