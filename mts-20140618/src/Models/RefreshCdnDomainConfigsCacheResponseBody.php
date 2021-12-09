<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\SDK\Mts\V20140618\Models\RefreshCdnDomainConfigsCacheResponseBody\failedDomains;
use AlibabaCloud\SDK\Mts\V20140618\Models\RefreshCdnDomainConfigsCacheResponseBody\sucessDomains;
use AlibabaCloud\Tea\Model;

class RefreshCdnDomainConfigsCacheResponseBody extends Model
{
    /**
     * @var failedDomains
     */
    public $failedDomains;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sucessDomains
     */
    public $sucessDomains;
    protected $_name = [
        'failedDomains' => 'FailedDomains',
        'requestId'     => 'RequestId',
        'sucessDomains' => 'SucessDomains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedDomains) {
            $res['FailedDomains'] = null !== $this->failedDomains ? $this->failedDomains->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sucessDomains) {
            $res['SucessDomains'] = null !== $this->sucessDomains ? $this->sucessDomains->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshCdnDomainConfigsCacheResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailedDomains'])) {
            $model->failedDomains = failedDomains::fromMap($map['FailedDomains']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SucessDomains'])) {
            $model->sucessDomains = sucessDomains::fromMap($map['SucessDomains']);
        }

        return $model;
    }
}
