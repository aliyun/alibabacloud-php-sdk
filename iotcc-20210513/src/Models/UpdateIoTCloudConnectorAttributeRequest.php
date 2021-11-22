<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class UpdateIoTCloudConnectorAttributeRequest extends Model
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
    public $ioTCloudConnectorDescription;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $ioTCloudConnectorName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $wildcardDomainEnabled;
    protected $_name = [
        'clientToken'                  => 'ClientToken',
        'dryRun'                       => 'DryRun',
        'ioTCloudConnectorDescription' => 'IoTCloudConnectorDescription',
        'ioTCloudConnectorId'          => 'IoTCloudConnectorId',
        'ioTCloudConnectorName'        => 'IoTCloudConnectorName',
        'regionId'                     => 'RegionId',
        'wildcardDomainEnabled'        => 'WildcardDomainEnabled',
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
        if (null !== $this->ioTCloudConnectorDescription) {
            $res['IoTCloudConnectorDescription'] = $this->ioTCloudConnectorDescription;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->ioTCloudConnectorName) {
            $res['IoTCloudConnectorName'] = $this->ioTCloudConnectorName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->wildcardDomainEnabled) {
            $res['WildcardDomainEnabled'] = $this->wildcardDomainEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIoTCloudConnectorAttributeRequest
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
        if (isset($map['IoTCloudConnectorDescription'])) {
            $model->ioTCloudConnectorDescription = $map['IoTCloudConnectorDescription'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['IoTCloudConnectorName'])) {
            $model->ioTCloudConnectorName = $map['IoTCloudConnectorName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WildcardDomainEnabled'])) {
            $model->wildcardDomainEnabled = $map['WildcardDomainEnabled'];
        }

        return $model;
    }
}
