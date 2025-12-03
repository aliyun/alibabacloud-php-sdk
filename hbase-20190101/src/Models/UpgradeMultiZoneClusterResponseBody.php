<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Dara\Model;

class UpgradeMultiZoneClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $upgradingComponents;
    protected $_name = [
        'requestId' => 'RequestId',
        'upgradingComponents' => 'UpgradingComponents',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->upgradingComponents) {
            $res['UpgradingComponents'] = $this->upgradingComponents;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UpgradingComponents'])) {
            $model->upgradingComponents = $map['UpgradingComponents'];
        }

        return $model;
    }
}
