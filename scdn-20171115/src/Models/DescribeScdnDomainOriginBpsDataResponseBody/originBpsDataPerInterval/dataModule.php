<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnDomainOriginBpsDataResponseBody\originBpsDataPerInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @var string
     */
    public $httpOriginBpsValue;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $httpsOriginBpsValue;

    /**
     * @var string
     */
    public $originBpsValue;
    protected $_name = [
        'httpOriginBpsValue'  => 'HttpOriginBpsValue',
        'timeStamp'           => 'TimeStamp',
        'httpsOriginBpsValue' => 'HttpsOriginBpsValue',
        'originBpsValue'      => 'OriginBpsValue',
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
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->httpsOriginBpsValue) {
            $res['HttpsOriginBpsValue'] = $this->httpsOriginBpsValue;
        }
        if (null !== $this->originBpsValue) {
            $res['OriginBpsValue'] = $this->originBpsValue;
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
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['HttpsOriginBpsValue'])) {
            $model->httpsOriginBpsValue = $map['HttpsOriginBpsValue'];
        }
        if (isset($map['OriginBpsValue'])) {
            $model->originBpsValue = $map['OriginBpsValue'];
        }

        return $model;
    }
}
