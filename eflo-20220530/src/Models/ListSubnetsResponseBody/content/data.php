<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content\data\tags;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListSubnetsResponseBody\content\data\vpdBaseInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $ncCount;

    /**
     * @var int
     */
    public $networkInterfaceCount;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subnetId;

    /**
     * @var string
     */
    public $subnetName;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr' => 'Cidr',
        'createTime' => 'CreateTime',
        'gmtModified' => 'GmtModified',
        'message' => 'Message',
        'ncCount' => 'NcCount',
        'networkInterfaceCount' => 'NetworkInterfaceCount',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'subnetId' => 'SubnetId',
        'subnetName' => 'SubnetName',
        'tags' => 'Tags',
        'tenantId' => 'TenantId',
        'type' => 'Type',
        'vpdBaseInfo' => 'VpdBaseInfo',
        'vpdId' => 'VpdId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (null !== $this->vpdBaseInfo) {
            $this->vpdBaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->ncCount) {
            $res['NcCount'] = $this->ncCount;
        }

        if (null !== $this->networkInterfaceCount) {
            $res['NetworkInterfaceCount'] = $this->networkInterfaceCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }

        if (null !== $this->subnetName) {
            $res['SubnetName'] = $this->subnetName;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toArray($noStream) : $this->vpdBaseInfo;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NcCount'])) {
            $model->ncCount = $map['NcCount'];
        }

        if (isset($map['NetworkInterfaceCount'])) {
            $model->networkInterfaceCount = $map['NetworkInterfaceCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }

        if (isset($map['SubnetName'])) {
            $model->subnetName = $map['SubnetName'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
