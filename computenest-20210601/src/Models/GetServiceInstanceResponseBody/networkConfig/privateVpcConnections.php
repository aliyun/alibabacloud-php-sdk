<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections\connectionConfigs;

class privateVpcConnections extends Model
{
    /**
     * @var connectionConfigs[]
     */
    public $connectionConfigs;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $privateZoneId;

    /**
     * @var string
     */
    public $privateZoneName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectionConfigs' => 'ConnectionConfigs',
        'endpointId' => 'EndpointId',
        'privateZoneId' => 'PrivateZoneId',
        'privateZoneName' => 'PrivateZoneName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->connectionConfigs)) {
            Model::validateArray($this->connectionConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionConfigs) {
            if (\is_array($this->connectionConfigs)) {
                $res['ConnectionConfigs'] = [];
                $n1 = 0;
                foreach ($this->connectionConfigs as $item1) {
                    $res['ConnectionConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->privateZoneId) {
            $res['PrivateZoneId'] = $this->privateZoneId;
        }

        if (null !== $this->privateZoneName) {
            $res['PrivateZoneName'] = $this->privateZoneName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ConnectionConfigs'])) {
            if (!empty($map['ConnectionConfigs'])) {
                $model->connectionConfigs = [];
                $n1 = 0;
                foreach ($map['ConnectionConfigs'] as $item1) {
                    $model->connectionConfigs[$n1] = connectionConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['PrivateZoneId'])) {
            $model->privateZoneId = $map['PrivateZoneId'];
        }

        if (isset($map['PrivateZoneName'])) {
            $model->privateZoneName = $map['PrivateZoneName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
