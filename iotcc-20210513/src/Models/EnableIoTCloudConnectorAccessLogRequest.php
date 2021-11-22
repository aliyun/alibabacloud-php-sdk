<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class EnableIoTCloudConnectorAccessLogRequest extends Model
{
    /**
     * @var string
     */
    public $accessLogSlsLogStore;

    /**
     * @var string
     */
    public $accessLogSlsProject;

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
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessLogSlsLogStore' => 'AccessLogSlsLogStore',
        'accessLogSlsProject'  => 'AccessLogSlsProject',
        'clientToken'          => 'ClientToken',
        'dryRun'               => 'DryRun',
        'ioTCloudConnectorId'  => 'IoTCloudConnectorId',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessLogSlsLogStore) {
            $res['AccessLogSlsLogStore'] = $this->accessLogSlsLogStore;
        }
        if (null !== $this->accessLogSlsProject) {
            $res['AccessLogSlsProject'] = $this->accessLogSlsProject;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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
     * @return EnableIoTCloudConnectorAccessLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessLogSlsLogStore'])) {
            $model->accessLogSlsLogStore = $map['AccessLogSlsLogStore'];
        }
        if (isset($map['AccessLogSlsProject'])) {
            $model->accessLogSlsProject = $map['AccessLogSlsProject'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
