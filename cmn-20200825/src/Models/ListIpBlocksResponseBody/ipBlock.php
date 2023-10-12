<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock\tasks;
use AlibabaCloud\SDK\Cmn\V20200825\Models\ListIpBlocksResponseBody\ipBlock\zoneLayer;
use AlibabaCloud\Tea\Model;

class ipBlock extends Model
{
    /**
     * @example TEST-别名
     *
     * @var string
     */
    public $abbr;

    /**
     * @description IP用途
     *
     * @example 员工出口IP
     *
     * @var string
     */
    public $application;

    /**
     * @description 备份设备名称
     *
     * @example ASW-2
     *
     * @var string
     */
    public $backupDeviceName;

    /**
     * @description 业务类型UID
     *
     * @example asdaasd
     *
     * @var string
     */
    public $businessTypeId;

    /**
     * @example 互联地址
     *
     * @var string
     */
    public $businessTypeName;

    /**
     * @example IPV4/IPV6
     *
     * @var string
     */
    public $category;

    /**
     * @description 备注
     *
     * @example Description
     *
     * @var string
     */
    public $description;

    /**
     * @description 设备名称
     *
     * @example ASW-1
     *
     * @var string
     */
    public $deviceName;

    /**
     * @var mixed[]
     */
    public $extAttributes;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $ipBlockCode;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $ipBlockId;

    /**
     * @var string[]
     */
    public $ipBlocks;

    /**
     * @example 0
     *
     * @var int
     */
    public $isLock;

    /**
     * @example zone-xxx
     *
     * @var string
     */
    public $limitZoneTypes;

    /**
     * @description 公网地址类型 INC GUEST VIP
     *
     * @example INC
     *
     * @var string
     */
    public $netBusiness;

    /**
     * @description 公网私网标志 PUBLIC PRIVATE
     *
     * @example 24
     *
     * @var string
     */
    public $netType;

    /**
     * @description IP归属
     *
     * @example 阿里
     *
     * @var string
     */
    public $ownership;

    /**
     * @example 123
     *
     * @var string
     */
    public $parentId;

    /**
     * @var string[]
     */
    public $queryIpList;

    /**
     * @example 0.38
     *
     * @var float
     */
    public $splitRate;

    /**
     * @example using
     *
     * @var string
     */
    public $status;

    /**
     * @example 商业网
     *
     * @var string
     */
    public $subBusinessTypeName;

    /**
     * @var tasks[]
     */
    public $tasks;

    /**
     * @description 园区层级
     *
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
        'abbr'                => 'Abbr',
        'application'         => 'Application',
        'backupDeviceName'    => 'BackupDeviceName',
        'businessTypeId'      => 'BusinessTypeId',
        'businessTypeName'    => 'BusinessTypeName',
        'category'            => 'Category',
        'description'         => 'Description',
        'deviceName'          => 'DeviceName',
        'extAttributes'       => 'ExtAttributes',
        'ipBlockCode'         => 'IpBlockCode',
        'ipBlockId'           => 'IpBlockId',
        'ipBlocks'            => 'IpBlocks',
        'isLock'              => 'IsLock',
        'limitZoneTypes'      => 'LimitZoneTypes',
        'netBusiness'         => 'NetBusiness',
        'netType'             => 'NetType',
        'ownership'           => 'Ownership',
        'parentId'            => 'ParentId',
        'queryIpList'         => 'QueryIpList',
        'splitRate'           => 'SplitRate',
        'status'              => 'Status',
        'subBusinessTypeName' => 'SubBusinessTypeName',
        'tasks'               => 'Tasks',
        'zoneLayer'           => 'ZoneLayer',
        'zoneName'            => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abbr) {
            $res['Abbr'] = $this->abbr;
        }
        if (null !== $this->application) {
            $res['Application'] = $this->application;
        }
        if (null !== $this->backupDeviceName) {
            $res['BackupDeviceName'] = $this->backupDeviceName;
        }
        if (null !== $this->businessTypeId) {
            $res['BusinessTypeId'] = $this->businessTypeId;
        }
        if (null !== $this->businessTypeName) {
            $res['BusinessTypeName'] = $this->businessTypeName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->extAttributes) {
            $res['ExtAttributes'] = $this->extAttributes;
        }
        if (null !== $this->ipBlockCode) {
            $res['IpBlockCode'] = $this->ipBlockCode;
        }
        if (null !== $this->ipBlockId) {
            $res['IpBlockId'] = $this->ipBlockId;
        }
        if (null !== $this->ipBlocks) {
            $res['IpBlocks'] = $this->ipBlocks;
        }
        if (null !== $this->isLock) {
            $res['IsLock'] = $this->isLock;
        }
        if (null !== $this->limitZoneTypes) {
            $res['LimitZoneTypes'] = $this->limitZoneTypes;
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
        if (null !== $this->queryIpList) {
            $res['QueryIpList'] = $this->queryIpList;
        }
        if (null !== $this->splitRate) {
            $res['SplitRate'] = $this->splitRate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subBusinessTypeName) {
            $res['SubBusinessTypeName'] = $this->subBusinessTypeName;
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ipBlock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abbr'])) {
            $model->abbr = $map['Abbr'];
        }
        if (isset($map['Application'])) {
            $model->application = $map['Application'];
        }
        if (isset($map['BackupDeviceName'])) {
            $model->backupDeviceName = $map['BackupDeviceName'];
        }
        if (isset($map['BusinessTypeId'])) {
            $model->businessTypeId = $map['BusinessTypeId'];
        }
        if (isset($map['BusinessTypeName'])) {
            $model->businessTypeName = $map['BusinessTypeName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['ExtAttributes'])) {
            $model->extAttributes = $map['ExtAttributes'];
        }
        if (isset($map['IpBlockCode'])) {
            $model->ipBlockCode = $map['IpBlockCode'];
        }
        if (isset($map['IpBlockId'])) {
            $model->ipBlockId = $map['IpBlockId'];
        }
        if (isset($map['IpBlocks'])) {
            if (!empty($map['IpBlocks'])) {
                $model->ipBlocks = $map['IpBlocks'];
            }
        }
        if (isset($map['IsLock'])) {
            $model->isLock = $map['IsLock'];
        }
        if (isset($map['LimitZoneTypes'])) {
            $model->limitZoneTypes = $map['LimitZoneTypes'];
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
        if (isset($map['QueryIpList'])) {
            if (!empty($map['QueryIpList'])) {
                $model->queryIpList = $map['QueryIpList'];
            }
        }
        if (isset($map['SplitRate'])) {
            $model->splitRate = $map['SplitRate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubBusinessTypeName'])) {
            $model->subBusinessTypeName = $map['SubBusinessTypeName'];
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
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
