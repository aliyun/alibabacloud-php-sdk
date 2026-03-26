<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeAppInstanceAttributeResponseBody\components;

class DescribeAppInstanceAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appType;

    /**
     * @var components[]
     */
    public $components;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $eipId;

    /**
     * @var string
     */
    public $eipStatus;

    /**
     * @var string
     */
    public $instanceClass;

    /**
     * @var string
     */
    public $instanceMinorVersion;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $natCreatedBy;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var string
     */
    public $natStatus;

    /**
     * @var string
     */
    public $publicConnectionString;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcConnectionString;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appName' => 'AppName',
        'appType' => 'AppType',
        'components' => 'Components',
        'DBInstanceName' => 'DBInstanceName',
        'eipId' => 'EipId',
        'eipStatus' => 'EipStatus',
        'instanceClass' => 'InstanceClass',
        'instanceMinorVersion' => 'InstanceMinorVersion',
        'instanceName' => 'InstanceName',
        'natCreatedBy' => 'NatCreatedBy',
        'natGatewayId' => 'NatGatewayId',
        'natStatus' => 'NatStatus',
        'publicConnectionString' => 'PublicConnectionString',
        'regionId' => 'RegionId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcConnectionString' => 'VpcConnectionString',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->components)) {
            Model::validateArray($this->components);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->components) {
            if (\is_array($this->components)) {
                $res['Components'] = [];
                $n1 = 0;
                foreach ($this->components as $item1) {
                    $res['Components'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->eipId) {
            $res['EipId'] = $this->eipId;
        }

        if (null !== $this->eipStatus) {
            $res['EipStatus'] = $this->eipStatus;
        }

        if (null !== $this->instanceClass) {
            $res['InstanceClass'] = $this->instanceClass;
        }

        if (null !== $this->instanceMinorVersion) {
            $res['InstanceMinorVersion'] = $this->instanceMinorVersion;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->natCreatedBy) {
            $res['NatCreatedBy'] = $this->natCreatedBy;
        }

        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }

        if (null !== $this->natStatus) {
            $res['NatStatus'] = $this->natStatus;
        }

        if (null !== $this->publicConnectionString) {
            $res['PublicConnectionString'] = $this->publicConnectionString;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->vpcConnectionString) {
            $res['VpcConnectionString'] = $this->vpcConnectionString;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['Components'])) {
            if (!empty($map['Components'])) {
                $model->components = [];
                $n1 = 0;
                foreach ($map['Components'] as $item1) {
                    $model->components[$n1] = components::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['EipId'])) {
            $model->eipId = $map['EipId'];
        }

        if (isset($map['EipStatus'])) {
            $model->eipStatus = $map['EipStatus'];
        }

        if (isset($map['InstanceClass'])) {
            $model->instanceClass = $map['InstanceClass'];
        }

        if (isset($map['InstanceMinorVersion'])) {
            $model->instanceMinorVersion = $map['InstanceMinorVersion'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['NatCreatedBy'])) {
            $model->natCreatedBy = $map['NatCreatedBy'];
        }

        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }

        if (isset($map['NatStatus'])) {
            $model->natStatus = $map['NatStatus'];
        }

        if (isset($map['PublicConnectionString'])) {
            $model->publicConnectionString = $map['PublicConnectionString'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['VpcConnectionString'])) {
            $model->vpcConnectionString = $map['VpcConnectionString'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
