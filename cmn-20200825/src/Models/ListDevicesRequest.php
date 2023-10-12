<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDevicesRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $calculateAmount;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @var string[]
     */
    public $deviceIds;

    /**
     * @example {"role":"ASW"}
     *
     * @var string
     */
    public $extAttributes;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string[]
     */
    public $hostName;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $ip;

    /**
     * @example G1QH55J******
     *
     * @var string
     */
    public $keyword;

    /**
     * @var string[]
     */
    public $mac;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $model;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @var string[]
     */
    public $physicalSpaceIds;

    /**
     * @example AH01
     *
     * @var string[]
     */
    public $securityDomain;

    /**
     * @var string[]
     */
    public $serviceStatus;

    /**
     * @var string[]
     */
    public $sn;

    /**
     * @var string[]
     */
    public $vendor;
    protected $_name = [
        'calculateAmount'  => 'CalculateAmount',
        'deviceFormId'     => 'DeviceFormId',
        'deviceFormName'   => 'DeviceFormName',
        'deviceIds'        => 'DeviceIds',
        'extAttributes'    => 'ExtAttributes',
        'hostName'         => 'HostName',
        'instanceId'       => 'InstanceId',
        'ip'               => 'Ip',
        'keyword'          => 'Keyword',
        'mac'              => 'Mac',
        'maxResults'       => 'MaxResults',
        'model'            => 'Model',
        'nextToken'        => 'NextToken',
        'physicalSpaceId'  => 'PhysicalSpaceId',
        'physicalSpaceIds' => 'PhysicalSpaceIds',
        'securityDomain'   => 'SecurityDomain',
        'serviceStatus'    => 'ServiceStatus',
        'sn'               => 'Sn',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calculateAmount) {
            $res['CalculateAmount'] = $this->calculateAmount;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->deviceIds) {
            $res['DeviceIds'] = $this->deviceIds;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->physicalSpaceIds) {
            $res['PhysicalSpaceIds'] = $this->physicalSpaceIds;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalculateAmount'])) {
            $model->calculateAmount = $map['CalculateAmount'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['DeviceIds'])) {
            if (!empty($map['DeviceIds'])) {
                $model->deviceIds = $map['DeviceIds'];
            }
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['HostName'])) {
            if (!empty($map['HostName'])) {
                $model->hostName = $map['HostName'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            if (!empty($map['Ip'])) {
                $model->ip = $map['Ip'];
            }
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Mac'])) {
            if (!empty($map['Mac'])) {
                $model->mac = $map['Mac'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Model'])) {
            if (!empty($map['Model'])) {
                $model->model = $map['Model'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['PhysicalSpaceIds'])) {
            if (!empty($map['PhysicalSpaceIds'])) {
                $model->physicalSpaceIds = $map['PhysicalSpaceIds'];
            }
        }
        if (isset($map['SecurityDomain'])) {
            if (!empty($map['SecurityDomain'])) {
                $model->securityDomain = $map['SecurityDomain'];
            }
        }
        if (isset($map['ServiceStatus'])) {
            if (!empty($map['ServiceStatus'])) {
                $model->serviceStatus = $map['ServiceStatus'];
            }
        }
        if (isset($map['Sn'])) {
            if (!empty($map['Sn'])) {
                $model->sn = $map['Sn'];
            }
        }
        if (isset($map['Vendor'])) {
            if (!empty($map['Vendor'])) {
                $model->vendor = $map['Vendor'];
            }
        }

        return $model;
    }
}
