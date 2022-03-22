<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponseBody\dataPerInterval;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval;
use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var httpCodeDataPerInterval
     */
    public $httpCodeDataPerInterval;

    /**
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
