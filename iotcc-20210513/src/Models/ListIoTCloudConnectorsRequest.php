<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorsRequest extends Model
{
    /**
     * @var string[]
     */
    public $APN;

    /**
     * @var string[]
     */
    public $ISP;

    /**
     * @var string[]
     */
    public $ioTCloudConnectorIds;

    /**
     * @var string[]
     */
    public $ioTCloudConnectorName;

    /**
     * @var string[]
     */
    public $ioTCloudConnectorStatus;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $vpcId;
    protected $_name = [
        'APN'                     => 'APN',
        'ISP'                     => 'ISP',
        'ioTCloudConnectorIds'    => 'IoTCloudConnectorIds',
        'ioTCloudConnectorName'   => 'IoTCloudConnectorName',
        'ioTCloudConnectorStatus' => 'IoTCloudConnectorStatus',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'regionId'                => 'RegionId',
        'vpcId'                   => 'VpcId',
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
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
        }
        if (null !== $this->ioTCloudConnectorIds) {
            $res['IoTCloudConnectorIds'] = $this->ioTCloudConnectorIds;
        }
        if (null !== $this->ioTCloudConnectorName) {
            $res['IoTCloudConnectorName'] = $this->ioTCloudConnectorName;
        }
        if (null !== $this->ioTCloudConnectorStatus) {
            $res['IoTCloudConnectorStatus'] = $this->ioTCloudConnectorStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIoTCloudConnectorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['APN'])) {
            if (!empty($map['APN'])) {
                $model->APN = $map['APN'];
            }
        }
        if (isset($map['ISP'])) {
            if (!empty($map['ISP'])) {
                $model->ISP = $map['ISP'];
            }
        }
        if (isset($map['IoTCloudConnectorIds'])) {
            if (!empty($map['IoTCloudConnectorIds'])) {
                $model->ioTCloudConnectorIds = $map['IoTCloudConnectorIds'];
            }
        }
        if (isset($map['IoTCloudConnectorName'])) {
            if (!empty($map['IoTCloudConnectorName'])) {
                $model->ioTCloudConnectorName = $map['IoTCloudConnectorName'];
            }
        }
        if (isset($map['IoTCloudConnectorStatus'])) {
            if (!empty($map['IoTCloudConnectorStatus'])) {
                $model->ioTCloudConnectorStatus = $map['IoTCloudConnectorStatus'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            if (!empty($map['VpcId'])) {
                $model->vpcId = $map['VpcId'];
            }
        }

        return $model;
    }
}
