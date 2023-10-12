<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class DeviceResource extends Model
{
    /**
     * @example archIdxxxyyy
     *
     * @var string
     */
    public $archId;

    /**
     * @example LOOPBACK、BUSINESS、  INTERCONNECTION
     *
     * @var string
     */
    public $businessType;

    /**
     * @example businessTypeId
     *
     * @var string
     */
    public $businessTypeId;

    /**
     * @example {}
     *
     * @var string
     */
    public $businessTypeParams;

    /**
     * @example 2020-02-01
     *
     * @var string
     */
    public $createTime;

    /**
     * @example zzz
     *
     * @var string
     */
    public $data;

    /**
     * @var \AlibabaCloud\SDK\Cmn\V20200825\Models\DeviceResource\deviceResource[]
     */
    public $deviceResource;

    /**
     * @example deviceResourceId315
     *
     * @var string
     */
    public $deviceResourceId;

    /**
     * @var string[]
     */
    public $deviceResourceIds;

    /**
     * @example CONNECTION
     *
     * @var string
     */
    public $downloadType;

    /**
     * @example Loopback
     *
     * @var string
     */
    public $ipType;

    /**
     * @example NORMAL、APPLY、RELEASE
     *
     * @var string
     */
    public $listType;

    /**
     * @example 1
     *
     * @var string
     */
    public $loopbackPort;

    /**
     * @example []
     *
     * @var string
     */
    public $netLocation;

    /**
     * @example xxx_zzz
     *
     * @var string
     */
    public $setupProjectId;

    /**
     * @example LOCATION、HOSTNAME、IP_ADDRESS、  CONFIGURATION_GENERATOR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'archId'             => 'ArchId',
        'businessType'       => 'BusinessType',
        'businessTypeId'     => 'BusinessTypeId',
        'businessTypeParams' => 'BusinessTypeParams',
        'createTime'         => 'CreateTime',
        'data'               => 'Data',
        'deviceResource'     => 'DeviceResource',
        'deviceResourceId'   => 'DeviceResourceId',
        'deviceResourceIds'  => 'DeviceResourceIds',
        'downloadType'       => 'DownloadType',
        'ipType'             => 'IpType',
        'listType'           => 'ListType',
        'loopbackPort'       => 'LoopbackPort',
        'netLocation'        => 'NetLocation',
        'setupProjectId'     => 'SetupProjectId',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archId) {
            $res['ArchId'] = $this->archId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->businessTypeParams) {
            $res['BusinessTypeParams'] = $this->businessTypeParams;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->deviceResource) {
            $res['DeviceResource'] = [];
            if (null !== $this->deviceResource && \is_array($this->deviceResource)) {
                $n = 0;
                foreach ($this->deviceResource as $item) {
                    $res['DeviceResource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deviceResourceId) {
            $res['DeviceResourceId'] = $this->deviceResourceId;
        }
        if (null !== $this->deviceResourceIds) {
            $res['DeviceResourceIds'] = $this->deviceResourceIds;
        }
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }
        if (null !== $this->listType) {
            $res['ListType'] = $this->listType;
        }
        if (null !== $this->loopbackPort) {
            $res['LoopbackPort'] = $this->loopbackPort;
        }
        if (null !== $this->netLocation) {
            $res['NetLocation'] = $this->netLocation;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchId'])) {
            $model->archId = $map['ArchId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['BusinessTypeParams'])) {
            $model->businessTypeParams = $map['BusinessTypeParams'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DeviceResource'])) {
            if (!empty($map['DeviceResource'])) {
                $model->deviceResource = [];
                $n                     = 0;
                foreach ($map['DeviceResource'] as $item) {
                    $model->deviceResource[$n++] = null !== $item ? \AlibabaCloud\SDK\Cmn\V20200825\Models\DeviceResource\deviceResource::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DeviceResourceId'])) {
            $model->deviceResourceId = $map['DeviceResourceId'];
        }
        if (isset($map['DeviceResourceIds'])) {
            if (!empty($map['DeviceResourceIds'])) {
                $model->deviceResourceIds = $map['DeviceResourceIds'];
            }
        }
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }
        if (isset($map['ListType'])) {
            $model->listType = $map['ListType'];
        }
        if (isset($map['LoopbackPort'])) {
            $model->loopbackPort = $map['LoopbackPort'];
        }
        if (isset($map['NetLocation'])) {
            $model->netLocation = $map['NetLocation'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
