<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsRequestStatisticsResponseBody\data;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return threatInfo
     */
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
