<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class ListDataCacheServicesResponseBody extends Model
{
    /**
     * @var CacheService[]
     */
    public $cacheServices;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cacheServices' => 'CacheServices',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->cacheServices)) {
            Model::validateArray($this->cacheServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cacheServices) {
            if (\is_array($this->cacheServices)) {
                $res['CacheServices'] = [];
                $n1 = 0;
                foreach ($this->cacheServices as $item1) {
                    $res['CacheServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CacheServices'])) {
            if (!empty($map['CacheServices'])) {
                $model->cacheServices = [];
                $n1 = 0;
                foreach ($map['CacheServices'] as $item1) {
                    $model->cacheServices[$n1] = CacheService::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
