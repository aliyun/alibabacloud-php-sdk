<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataResponseBody\dataPerInterval\dataModule\httpCodeDataPerInterval;

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
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        if (null !== $this->httpCodeDataPerInterval) {
            $this->httpCodeDataPerInterval->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpCodeDataPerInterval) {
            $res['HttpCodeDataPerInterval'] = null !== $this->httpCodeDataPerInterval ? $this->httpCodeDataPerInterval->toArray($noStream) : $this->httpCodeDataPerInterval;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['HttpCodeDataPerInterval'])) {
            $model->httpCodeDataPerInterval = httpCodeDataPerInterval::fromMap($map['HttpCodeDataPerInterval']);
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
