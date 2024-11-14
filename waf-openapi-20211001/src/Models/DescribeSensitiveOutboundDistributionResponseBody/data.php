<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The country to which the data is transferred.
     *
     * @example US
     *
     * @var string
     */
    public $country;

    /**
     * @description The number of personal information records involved in cross-border data transfer.
     *
     * @example 213
     *
     * @var int
     */
    public $infoOutboundCount;

    /**
     * @description The number of sensitive information records involved in cross-border data transfer.
     *
     * @example 144
     *
     * @var int
     */
    public $sensitiveOutboundCount;
    protected $_name = [
        'country'                => 'Country',
        'infoOutboundCount'      => 'InfoOutboundCount',
        'sensitiveOutboundCount' => 'SensitiveOutboundCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->infoOutboundCount) {
            $res['InfoOutboundCount'] = $this->infoOutboundCount;
        }
        if (null !== $this->sensitiveOutboundCount) {
            $res['SensitiveOutboundCount'] = $this->sensitiveOutboundCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['InfoOutboundCount'])) {
            $model->infoOutboundCount = $map['InfoOutboundCount'];
        }
        if (isset($map['SensitiveOutboundCount'])) {
            $model->sensitiveOutboundCount = $map['SensitiveOutboundCount'];
        }

        return $model;
    }
}
