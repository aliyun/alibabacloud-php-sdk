<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval;

use AlibabaCloud\Tea\Model;

class trafficDataModule extends Model
{
    /**
     * @description The name of the district.
     *
     * @example CN
     *
     * @var string
     */
    public $area;

    /**
     * @description The bandwidth. Unit: bit/s.
     *
     * @example 11288111.1
     *
     * @var float
     */
    public $bps;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The timestamp of the data returned.
     *
     * @example 2017-12-10T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @description The type of data returned. Valid values:
     *
     * - **StaticHttps**: the number of HTTPS requests for static content.
     * - **DynamicHttps**: the number of HTTPS requests for dynamic content.
     * - **DynamicHttp**: the number of HTTP requests for dynamic content.
     * - **StaticQuic**: the number of QUIC requests for static content.
     * - **DynamicQuic**: the number of QUIC requests for dynamic content.
     * @example DynamicHttp
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'area'      => 'Area',
        'bps'       => 'Bps',
        'domain'    => 'Domain',
        'timeStamp' => 'TimeStamp',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficDataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
