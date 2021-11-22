<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class CreateIoTCloudConnectorRequest extends Model
{
    /**
     * @var string
     */
    public $APN;

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
    public $ISP;

    /**
     * @var string
     */
    public $ioTCloudConnectorDescription;

    /**
     * @var string
     */
    public $ioTCloudConnectorName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var bool
     */
    public $wildcardDomainEnabled;
    protected $_name = [
        'APN'                          => 'APN',
        'clientToken'                  => 'ClientToken',
        'dryRun'                       => 'DryRun',
        'ISP'                          => 'ISP',
        'ioTCloudConnectorDescription' => 'IoTCloudConnectorDescription',
        'ioTCloudConnectorName'        => 'IoTCloudConnectorName',
        'regionId'                     => 'RegionId',
        'resourceUid'                  => 'ResourceUid',
        'wildcardDomainEnabled'        => 'WildcardDomainEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->APN) {
            $res['APN'] = $this->APN;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->ioTCloudConnectorDescription) {
            $res['IoTCloudConnectorDescription'] = $this->ioTCloudConnectorDescription;
        }
        if (null !== $this->ioTCloudConnectorName) {
            $res['IoTCloudConnectorName'] = $this->ioTCloudConnectorName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->wildcardDomainEnabled) {
            $res['WildcardDomainEnabled'] = $this->wildcardDomainEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIoTCloudConnectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }
        if (isset($map['IoTCloudConnectorDescription'])) {
            $model->ioTCloudConnectorDescription = $map['IoTCloudConnectorDescription'];
        }
        if (isset($map['IoTCloudConnectorName'])) {
            $model->ioTCloudConnectorName = $map['IoTCloudConnectorName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['WildcardDomainEnabled'])) {
            $model->wildcardDomainEnabled = $map['WildcardDomainEnabled'];
        }

        return $model;
    }
}
