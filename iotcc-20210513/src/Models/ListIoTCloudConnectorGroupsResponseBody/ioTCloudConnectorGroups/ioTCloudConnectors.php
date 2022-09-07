<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorGroupsResponseBody\ioTCloudConnectorGroups;

use AlibabaCloud\Tea\Model;

class ioTCloudConnectors extends Model
{
    /**
     * @var string
     */
    public $APN;

    /**
     * @var int
     */
    public $createTime;

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
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $ioTCloudConnectorName;

    /**
     * @var string
     */
    public $ioTCloudConnectorStatus;

    /**
     * @var string
     */
    public $serviceType;
    protected $_name = [
        'APN'                          => 'APN',
        'createTime'                   => 'CreateTime',
        'ISP'                          => 'ISP',
        'ioTCloudConnectorDescription' => 'IoTCloudConnectorDescription',
        'ioTCloudConnectorId'          => 'IoTCloudConnectorId',
        'ioTCloudConnectorName'        => 'IoTCloudConnectorName',
        'ioTCloudConnectorStatus'      => 'IoTCloudConnectorStatus',
        'serviceType'                  => 'ServiceType',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
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
        if (null !== $this->ioTCloudConnectorStatus) {
            $res['IoTCloudConnectorStatus'] = $this->ioTCloudConnectorStatus;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ioTCloudConnectors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            $model->APN = $map['APN'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
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
        if (isset($map['IoTCloudConnectorStatus'])) {
            $model->ioTCloudConnectorStatus = $map['IoTCloudConnectorStatus'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
