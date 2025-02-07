<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetTieredCacheResponseBody extends Model
{
    /**
     * @var string
     */
    public $cacheArchitectureMode;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cacheArchitectureMode' => 'CacheArchitectureMode',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheArchitectureMode) {
            $res['CacheArchitectureMode'] = $this->cacheArchitectureMode;
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
        if (isset($map['CacheArchitectureMode'])) {
            $model->cacheArchitectureMode = $map['CacheArchitectureMode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
