<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $httpOriginBpsValue;

    /**
     * @example 100
     *
     * @var string
     */
    public $httpsOriginBpsValue;

    /**
     * @example 200
     *
     * @var string
     */
    public $originBpsValue;

    /**
     * @example 2017-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'httpOriginBpsValue'  => 'HttpOriginBpsValue',
        'httpsOriginBpsValue' => 'HttpsOriginBpsValue',
        'originBpsValue'      => 'OriginBpsValue',
        'timeStamp'           => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpOriginBpsValue) {
            $res['HttpOriginBpsValue'] = $this->httpOriginBpsValue;
        }
        if (null !== $this->httpsOriginBpsValue) {
            $res['HttpsOriginBpsValue'] = $this->httpsOriginBpsValue;
        }
        if (null !== $this->originBpsValue) {
            $res['OriginBpsValue'] = $this->originBpsValue;
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
        if (isset($map['HttpOriginBpsValue'])) {
            $model->httpOriginBpsValue = $map['HttpOriginBpsValue'];
        }
        if (isset($map['HttpsOriginBpsValue'])) {
            $model->httpsOriginBpsValue = $map['HttpsOriginBpsValue'];
        }
        if (isset($map['OriginBpsValue'])) {
            $model->originBpsValue = $map['OriginBpsValue'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
