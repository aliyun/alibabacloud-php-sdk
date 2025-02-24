<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponseBody\content\data\erInfos;
use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponseBody\content\data\tags;

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
     * @var mixed[]
     */
    public $dependence;
    /**
     * @var erInfos[]
     */
    public $erInfos;
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
     * @var string[]
     */
    public $secondaryCidrBlocks;
    /**
     * @var string
     */
    public $serviceCidr;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $subnetCount;
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
    public $vpdId;
    /**
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr'                  => 'Cidr',
        'createTime'            => 'CreateTime',
        'dependence'            => 'Dependence',
        'erInfos'               => 'ErInfos',
        'gmtModified'           => 'GmtModified',
        'message'               => 'Message',
        'ncCount'               => 'NcCount',
        'networkInterfaceCount' => 'NetworkInterfaceCount',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'secondaryCidrBlocks'   => 'SecondaryCidrBlocks',
        'serviceCidr'           => 'ServiceCidr',
        'status'                => 'Status',
        'subnetCount'           => 'SubnetCount',
        'tags'                  => 'Tags',
        'tenantId'              => 'TenantId',
        'vpdId'                 => 'VpdId',
        'vpdName'               => 'VpdName',
    ];

    public function validate()
    {
        if (\is_array($this->dependence)) {
            Model::validateArray($this->dependence);
        }
        if (\is_array($this->erInfos)) {
            Model::validateArray($this->erInfos);
        }
        if (\is_array($this->secondaryCidrBlocks)) {
            Model::validateArray($this->secondaryCidrBlocks);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->dependence) {
            if (\is_array($this->dependence)) {
                $res['Dependence'] = [];
                foreach ($this->dependence as $key1 => $value1) {
                    $res['Dependence'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->erInfos) {
            if (\is_array($this->erInfos)) {
                $res['ErInfos'] = [];
                $n1             = 0;
                foreach ($this->erInfos as $item1) {
                    $res['ErInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->secondaryCidrBlocks) {
            if (\is_array($this->secondaryCidrBlocks)) {
                $res['SecondaryCidrBlocks'] = [];
                $n1                         = 0;
                foreach ($this->secondaryCidrBlocks as $item1) {
                    $res['SecondaryCidrBlocks'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serviceCidr) {
            $res['ServiceCidr'] = $this->serviceCidr;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subnetCount) {
            $res['SubnetCount'] = $this->subnetCount;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
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

        if (isset($map['Dependence'])) {
            if (!empty($map['Dependence'])) {
                $model->dependence = [];
                foreach ($map['Dependence'] as $key1 => $value1) {
                    $model->dependence[$key1] = $value1;
                }
            }
        }

        if (isset($map['ErInfos'])) {
            if (!empty($map['ErInfos'])) {
                $model->erInfos = [];
                $n1             = 0;
                foreach ($map['ErInfos'] as $item1) {
                    $model->erInfos[$n1++] = erInfos::fromMap($item1);
                }
            }
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

        if (isset($map['SecondaryCidrBlocks'])) {
            if (!empty($map['SecondaryCidrBlocks'])) {
                $model->secondaryCidrBlocks = [];
                $n1                         = 0;
                foreach ($map['SecondaryCidrBlocks'] as $item1) {
                    $model->secondaryCidrBlocks[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServiceCidr'])) {
            $model->serviceCidr = $map['ServiceCidr'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubnetCount'])) {
            $model->subnetCount = $map['SubnetCount'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
