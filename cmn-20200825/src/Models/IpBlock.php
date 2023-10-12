<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\IpBlock\zoneLayer;
use AlibabaCloud\Tea\Model;

class IpBlock extends Model
{
    /**
     * @example 员工出口IP
     *
     * @var string
     */
    public $application;

    /**
     * @example ASW-2
     *
     * @var string
     */
    public $backupDeviceName;

    /**
     * @example 10.0.0.0
     *
     * @var string
     */
    public $block;

    /**
     * @example asdaasd
     *
     * @var string
     */
    public $businessTypeId;

    /**
     * @example IPV4
     *
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example ASW-1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $ipBlockId;

    /**
     * @example 8
     *
     * @var string
     */
    public $mask;

    /**
     * @example INC
     *
     * @var string
     */
    public $netBusiness;

    /**
     * @example 24
     *
     * @var string
     */
    public $netType;

    /**
     * @example 阿里
     *
     * @var string
     */
    public $ownership;

    /**
     * @example 父地址段
     *
     * @var string
     */
    public $parentId;

    /**
     * @example true
     *
     * @var string
     */
    public $reserveParentBlock;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example update
     *
     * @var string
     */
    public $updateType;

    /**
     * @var zoneLayer[]
     */
    public $zoneLayer;

    /**
     * @example 西溪园区
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'application'        => 'Application',
        'backupDeviceName'   => 'BackupDeviceName',
        'block'              => 'Block',
        'businessTypeId'     => 'BusinessTypeId',
        'category'           => 'Category',
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'deviceName'         => 'DeviceName',
        'ipBlockId'          => 'IpBlockId',
        'mask'               => 'Mask',
        'netBusiness'        => 'NetBusiness',
        'netType'            => 'NetType',
        'ownership'          => 'Ownership',
        'parentId'           => 'ParentId',
        'reserveParentBlock' => 'ReserveParentBlock',
        'resourceGroupId'    => 'ResourceGroupId',
        'updateType'         => 'UpdateType',
        'zoneLayer'          => 'ZoneLayer',
        'zoneName'           => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->backupDeviceName) {
            $res['BackupDeviceName'] = $this->backupDeviceName;
        }
        if (null !== $this->block) {
            $res['Block'] = $this->block;
        }
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->ipBlockId) {
            $res['IpBlockId'] = $this->ipBlockId;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->netBusiness) {
            $res['NetBusiness'] = $this->netBusiness;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->ownership) {
            $res['Ownership'] = $this->ownership;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->reserveParentBlock) {
            $res['ReserveParentBlock'] = $this->reserveParentBlock;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }
        if (null !== $this->zoneLayer) {
            $res['ZoneLayer'] = [];
            if (null !== $this->zoneLayer && \is_array($this->zoneLayer)) {
                $n = 0;
                foreach ($this->zoneLayer as $item) {
                    $res['ZoneLayer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IpBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['BackupDeviceName'])) {
            $model->backupDeviceName = $map['BackupDeviceName'];
        }
        if (isset($map['Block'])) {
            $model->block = $map['Block'];
        }
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IpBlockId'])) {
            $model->ipBlockId = $map['IpBlockId'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['NetBusiness'])) {
            $model->netBusiness = $map['NetBusiness'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Ownership'])) {
            $model->ownership = $map['Ownership'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ReserveParentBlock'])) {
            $model->reserveParentBlock = $map['ReserveParentBlock'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }
        if (isset($map['ZoneLayer'])) {
            if (!empty($map['ZoneLayer'])) {
                $model->zoneLayer = [];
                $n                = 0;
                foreach ($map['ZoneLayer'] as $item) {
                    $model->zoneLayer[$n++] = null !== $item ? zoneLayer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
