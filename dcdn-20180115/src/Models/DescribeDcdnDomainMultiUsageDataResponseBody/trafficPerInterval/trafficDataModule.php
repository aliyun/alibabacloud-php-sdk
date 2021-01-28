<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainMultiUsageDataResponseBody\trafficPerInterval;

use AlibabaCloud\Tea\Model;

class trafficDataModule extends Model
{
    /**
     * @var string
     */
    public $type;

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
    public $area;

    /**
     * @var float
     */
    public $bps;
    protected $_name = [
        'type'      => 'Type',
        'domain'    => 'Domain',
        'timeStamp' => 'TimeStamp',
        'area'      => 'Area',
        'bps'       => 'Bps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        return $model;
    }
}
