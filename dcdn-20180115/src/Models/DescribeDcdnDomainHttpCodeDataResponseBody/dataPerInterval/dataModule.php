<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval;
use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @description The proportions of the HTTP status codes.
     *
     * @var httpCodeDataPerInterval
     */
    public $httpCodeDataPerInterval;

    /**
     * @description The timestamp of the returned data.
     *
     * @example 2019-03-01T13:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'httpCodeDataPerInterval' => 'HttpCodeDataPerInterval',
        'timeStamp'               => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpCodeDataPerInterval) {
            $res['HttpCodeDataPerInterval'] = null !== $this->httpCodeDataPerInterval ? $this->httpCodeDataPerInterval->toMap() : null;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpCodeDataPerInterval'])) {
            $model->httpCodeDataPerInterval = httpCodeDataPerInterval::fromMap($map['HttpCodeDataPerInterval']);
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
