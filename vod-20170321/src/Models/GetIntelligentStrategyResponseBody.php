<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetIntelligentStrategyResponseBody\intelligentStrategy;

class GetIntelligentStrategyResponseBody extends Model
{
    /**
     * @var intelligentStrategy
     */
    public $intelligentStrategy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'intelligentStrategy' => 'IntelligentStrategy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->intelligentStrategy) {
            $this->intelligentStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intelligentStrategy) {
            $res['IntelligentStrategy'] = null !== $this->intelligentStrategy ? $this->intelligentStrategy->toArray($noStream) : $this->intelligentStrategy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IntelligentStrategy'])) {
            $model->intelligentStrategy = intelligentStrategy::fromMap($map['IntelligentStrategy']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
