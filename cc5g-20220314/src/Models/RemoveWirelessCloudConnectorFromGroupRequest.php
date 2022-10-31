<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class RemoveWirelessCloudConnectorFromGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $wirelessCloudConnectorGroupId;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorIds;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'dryRun'                        => 'DryRun',
        'regionId'                      => 'RegionId',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
        'wirelessCloudConnectorIds'     => 'WirelessCloudConnectorIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }
        if (null !== $this->wirelessCloudConnectorIds) {
            $res['WirelessCloudConnectorIds'] = $this->wirelessCloudConnectorIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveWirelessCloudConnectorFromGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }
        if (isset($map['WirelessCloudConnectorIds'])) {
            if (!empty($map['WirelessCloudConnectorIds'])) {
                $model->wirelessCloudConnectorIds = $map['WirelessCloudConnectorIds'];
            }
        }

        return $model;
    }
}
