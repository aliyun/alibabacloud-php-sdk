<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models\ListIoTCloudConnectorsResponseBody;

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
    public $ioTCloudConnectorBusinessStatus;

    /**
     * @var string
     */
    public $ioTCloudConnectorDescription;

    /**
     * @var string
     */
    public $ioTCloudConnectorGroupId;

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
    public $ipFeature;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $rateLimit;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $vSwitchList;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $wildcardDomainEnabled;
    protected $_name = [
        'APN'                             => 'APN',
        'createTime'                      => 'CreateTime',
        'ISP'                             => 'ISP',
        'ioTCloudConnectorBusinessStatus' => 'IoTCloudConnectorBusinessStatus',
        'ioTCloudConnectorDescription'    => 'IoTCloudConnectorDescription',
        'ioTCloudConnectorGroupId'        => 'IoTCloudConnectorGroupId',
        'ioTCloudConnectorId'             => 'IoTCloudConnectorId',
        'ioTCloudConnectorName'           => 'IoTCloudConnectorName',
        'ioTCloudConnectorStatus'         => 'IoTCloudConnectorStatus',
        'ipFeature'                       => 'IpFeature',
        'mode'                            => 'Mode',
        'modifyTime'                      => 'ModifyTime',
        'rateLimit'                       => 'RateLimit',
        'type'                            => 'Type',
        'vSwitchList'                     => 'VSwitchList',
        'vpcId'                           => 'VpcId',
        'wildcardDomainEnabled'           => 'WildcardDomainEnabled',
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
        if (null !== $this->ioTCloudConnectorBusinessStatus) {
            $res['IoTCloudConnectorBusinessStatus'] = $this->ioTCloudConnectorBusinessStatus;
        }
        if (null !== $this->ioTCloudConnectorDescription) {
            $res['IoTCloudConnectorDescription'] = $this->ioTCloudConnectorDescription;
        }
        if (null !== $this->ioTCloudConnectorGroupId) {
            $res['IoTCloudConnectorGroupId'] = $this->ioTCloudConnectorGroupId;
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
        if (null !== $this->ipFeature) {
            $res['IpFeature'] = $this->ipFeature;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->rateLimit) {
            $res['RateLimit'] = $this->rateLimit;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vSwitchList) {
            $res['VSwitchList'] = $this->vSwitchList;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->wildcardDomainEnabled) {
            $res['WildcardDomainEnabled'] = $this->wildcardDomainEnabled;
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
        if (isset($map['IoTCloudConnectorBusinessStatus'])) {
            $model->ioTCloudConnectorBusinessStatus = $map['IoTCloudConnectorBusinessStatus'];
        }
        if (isset($map['IoTCloudConnectorDescription'])) {
            $model->ioTCloudConnectorDescription = $map['IoTCloudConnectorDescription'];
        }
        if (isset($map['IoTCloudConnectorGroupId'])) {
            $model->ioTCloudConnectorGroupId = $map['IoTCloudConnectorGroupId'];
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
        if (isset($map['IpFeature'])) {
            $model->ipFeature = $map['IpFeature'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RateLimit'])) {
            $model->rateLimit = $map['RateLimit'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VSwitchList'])) {
            if (!empty($map['VSwitchList'])) {
                $model->vSwitchList = $map['VSwitchList'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WildcardDomainEnabled'])) {
            $model->wildcardDomainEnabled = $map['WildcardDomainEnabled'];
        }

        return $model;
    }
}
