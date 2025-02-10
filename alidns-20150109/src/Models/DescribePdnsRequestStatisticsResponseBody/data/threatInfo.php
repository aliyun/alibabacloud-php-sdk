<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsResponseBody\data;

use AlibabaCloud\Dara\Model;

class threatInfo extends Model
{
    /**
     * @var string
     */
    public $threatLevel;
    /**
     * @var string
     */
    public $threatType;
    protected $_name = [
        'threatLevel' => 'ThreatLevel',
        'threatType'  => 'ThreatType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }

        if (null !== $this->threatType) {
            $res['ThreatType'] = $this->threatType;
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
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }

        if (isset($map['ThreatType'])) {
            $model->threatType = $map['ThreatType'];
        }

        return $model;
    }
}
