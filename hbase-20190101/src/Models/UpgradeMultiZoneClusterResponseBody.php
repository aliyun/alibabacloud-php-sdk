<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class UpgradeMultiZoneClusterResponseBody extends Model
{
    /**
     * @example C532A4D4-9451-4460-BB3E-300FEC852D3F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example LINDORM
     *
     * @var string
     */
    public $upgradingComponents;
    protected $_name = [
        'requestId'           => 'RequestId',
        'upgradingComponents' => 'UpgradingComponents',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpgradeMultiZoneClusterResponseBody
     */
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
