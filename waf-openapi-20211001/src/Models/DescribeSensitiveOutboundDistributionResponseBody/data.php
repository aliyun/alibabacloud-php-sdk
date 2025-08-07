<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeSensitiveOutboundDistributionResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $country;

    /**
     * @var int
     */
    public $infoOutboundCount;

    /**
     * @var int
     */
    public $sensitiveOutboundCount;
    protected $_name = [
        'country' => 'Country',
        'infoOutboundCount' => 'InfoOutboundCount',
        'sensitiveOutboundCount' => 'SensitiveOutboundCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
