<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainMultiUsageDataResponseBody\trafficPerInterval;

use AlibabaCloud\Dara\Model;

class trafficDataModule extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var float
     */
    public $bps;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'area' => 'Area',
        'bps' => 'Bps',
        'domain' => 'Domain',
        'timeStamp' => 'TimeStamp',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
