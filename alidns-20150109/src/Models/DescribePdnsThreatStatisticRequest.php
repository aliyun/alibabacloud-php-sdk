<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribePdnsThreatStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $threatSourceIp;
    protected $_name = [
        'endDate' => 'EndDate',
        'lang' => 'Lang',
        'startDate' => 'StartDate',
        'threatSourceIp' => 'ThreatSourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->threatSourceIp) {
            $res['ThreatSourceIp'] = $this->threatSourceIp;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['ThreatSourceIp'])) {
            $model->threatSourceIp = $map['ThreatSourceIp'];
        }

        return $model;
    }
}
