<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetCacheReserveSpecificationResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $cacheReserveCapacity;

    /**
     * @var string[]
     */
    public $cacheReserveRegion;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cacheReserveCapacity' => 'CacheReserveCapacity',
        'cacheReserveRegion' => 'CacheReserveRegion',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cacheReserveCapacity)) {
            Model::validateArray($this->cacheReserveCapacity);
        }
        if (\is_array($this->cacheReserveRegion)) {
            Model::validateArray($this->cacheReserveRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheReserveCapacity) {
            if (\is_array($this->cacheReserveCapacity)) {
                $res['CacheReserveCapacity'] = [];
                $n1 = 0;
                foreach ($this->cacheReserveCapacity as $item1) {
                    $res['CacheReserveCapacity'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cacheReserveRegion) {
            if (\is_array($this->cacheReserveRegion)) {
                $res['CacheReserveRegion'] = [];
                $n1 = 0;
                foreach ($this->cacheReserveRegion as $item1) {
                    $res['CacheReserveRegion'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CacheReserveCapacity'])) {
            if (!empty($map['CacheReserveCapacity'])) {
                $model->cacheReserveCapacity = [];
                $n1 = 0;
                foreach ($map['CacheReserveCapacity'] as $item1) {
                    $model->cacheReserveCapacity[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CacheReserveRegion'])) {
            if (!empty($map['CacheReserveRegion'])) {
                $model->cacheReserveRegion = [];
                $n1 = 0;
                foreach ($map['CacheReserveRegion'] as $item1) {
                    $model->cacheReserveRegion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
