<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\SubmitPenetrationTestResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'assetType' => 'AssetType',
        'ip' => 'Ip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
