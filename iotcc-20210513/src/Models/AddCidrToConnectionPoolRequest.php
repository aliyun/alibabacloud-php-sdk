<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class AddCidrToConnectionPoolRequest extends Model
{
    /**
     * @var string[]
     */
    public $cidrs;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $connectionPoolId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidrs'               => 'Cidrs',
        'clientToken'         => 'ClientToken',
        'connectionPoolId'    => 'ConnectionPoolId',
        'dryRun'              => 'DryRun',
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrs) {
            $res['Cidrs'] = $this->cidrs;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->connectionPoolId) {
            $res['ConnectionPoolId'] = $this->connectionPoolId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCidrToConnectionPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidrs'])) {
            if (!empty($map['Cidrs'])) {
                $model->cidrs = $map['Cidrs'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConnectionPoolId'])) {
            $model->connectionPoolId = $map['ConnectionPoolId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
