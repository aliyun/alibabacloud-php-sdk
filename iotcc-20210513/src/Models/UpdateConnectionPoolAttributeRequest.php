<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateConnectionPoolAttributeRequest extends Model
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
    public $connectionPoolDescription;

    /**
     * @var string
     */
    public $connectionPoolId;

    /**
     * @var string
     */
    public $connectionPoolName;

    /**
     * @var int
     */
    public $count;

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
        'cidrs'                     => 'Cidrs',
        'clientToken'               => 'ClientToken',
        'connectionPoolDescription' => 'ConnectionPoolDescription',
        'connectionPoolId'          => 'ConnectionPoolId',
        'connectionPoolName'        => 'ConnectionPoolName',
        'count'                     => 'Count',
        'dryRun'                    => 'DryRun',
        'ioTCloudConnectorId'       => 'IoTCloudConnectorId',
        'regionId'                  => 'RegionId',
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
        if (null !== $this->connectionPoolDescription) {
            $res['ConnectionPoolDescription'] = $this->connectionPoolDescription;
        }
        if (null !== $this->connectionPoolId) {
            $res['ConnectionPoolId'] = $this->connectionPoolId;
        }
        if (null !== $this->connectionPoolName) {
            $res['ConnectionPoolName'] = $this->connectionPoolName;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
     * @return UpdateConnectionPoolAttributeRequest
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
        if (isset($map['ConnectionPoolDescription'])) {
            $model->connectionPoolDescription = $map['ConnectionPoolDescription'];
        }
        if (isset($map['ConnectionPoolId'])) {
            $model->connectionPoolId = $map['ConnectionPoolId'];
        }
        if (isset($map['ConnectionPoolName'])) {
            $model->connectionPoolName = $map['ConnectionPoolName'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
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
