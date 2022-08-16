<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorBackhaulRouteRequest extends Model
{
    /**
     * @var string
     */
    public $netLinkId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'netLinkId'                => 'NetLinkId',
        'regionId'                 => 'RegionId',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netLinkId) {
            $res['NetLinkId'] = $this->netLinkId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIoTCloudConnectorBackhaulRouteRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetLinkId'])) {
            $model->netLinkId = $map['NetLinkId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
