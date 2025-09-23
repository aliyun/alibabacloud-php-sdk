<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeResourcePackagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeResourcePackagesResponseBody\resourcePackageList\resourcePackageQuotaList;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeResourcePackagesResponseBody\resourcePackageList\tags;

class resourcePackageList extends Model
{
    /**
     * @var bool
     */
    public $autoQuota;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $resourcePackageId;

    /**
     * @var resourcePackageQuotaList[]
     */
    public $resourcePackageQuotaList;

    /**
     * @var string
     */
    public $resourcePackageType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var int
     */
    public $totalCapacity;

    /**
     * @var int
     */
    public $usedCapacity;
    protected $_name = [
        'autoQuota' => 'AutoQuota',
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'resourcePackageId' => 'ResourcePackageId',
        'resourcePackageQuotaList' => 'ResourcePackageQuotaList',
        'resourcePackageType' => 'ResourcePackageType',
        'status' => 'Status',
        'tags' => 'Tags',
        'totalCapacity' => 'TotalCapacity',
        'usedCapacity' => 'UsedCapacity',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePackageQuotaList)) {
            Model::validateArray($this->resourcePackageQuotaList);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoQuota) {
            $res['AutoQuota'] = $this->autoQuota;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->resourcePackageId) {
            $res['ResourcePackageId'] = $this->resourcePackageId;
        }

        if (null !== $this->resourcePackageQuotaList) {
            if (\is_array($this->resourcePackageQuotaList)) {
                $res['ResourcePackageQuotaList'] = [];
                $n1 = 0;
                foreach ($this->resourcePackageQuotaList as $item1) {
                    $res['ResourcePackageQuotaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourcePackageType) {
            $res['ResourcePackageType'] = $this->resourcePackageType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCapacity) {
            $res['TotalCapacity'] = $this->totalCapacity;
        }

        if (null !== $this->usedCapacity) {
            $res['UsedCapacity'] = $this->usedCapacity;
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
        if (isset($map['AutoQuota'])) {
            $model->autoQuota = $map['AutoQuota'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['ResourcePackageId'])) {
            $model->resourcePackageId = $map['ResourcePackageId'];
        }

        if (isset($map['ResourcePackageQuotaList'])) {
            if (!empty($map['ResourcePackageQuotaList'])) {
                $model->resourcePackageQuotaList = [];
                $n1 = 0;
                foreach ($map['ResourcePackageQuotaList'] as $item1) {
                    $model->resourcePackageQuotaList[$n1] = resourcePackageQuotaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourcePackageType'])) {
            $model->resourcePackageType = $map['ResourcePackageType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCapacity'])) {
            $model->totalCapacity = $map['TotalCapacity'];
        }

        if (isset($map['UsedCapacity'])) {
            $model->usedCapacity = $map['UsedCapacity'];
        }

        return $model;
    }
}
