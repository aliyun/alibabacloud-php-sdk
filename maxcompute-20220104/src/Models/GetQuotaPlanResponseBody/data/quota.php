<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota\billingPolicy;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota\scheduleInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota\subQuotaInfoList;

class quota extends Model
{
    /**
     * @var billingPolicy
     */
    public $billingPolicy;

    /**
     * @var string
     */
    public $cluster;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var mixed[]
     */
    public $parameter;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subQuotaInfoList[]
     */
    public $subQuotaInfoList;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'billingPolicy' => 'billingPolicy',
        'cluster' => 'cluster',
        'createTime' => 'createTime',
        'creatorId' => 'creatorId',
        'id' => 'id',
        'name' => 'name',
        'nickName' => 'nickName',
        'parameter' => 'parameter',
        'parentId' => 'parentId',
        'regionId' => 'regionId',
        'scheduleInfo' => 'scheduleInfo',
        'status' => 'status',
        'subQuotaInfoList' => 'subQuotaInfoList',
        'tag' => 'tag',
        'tenantId' => 'tenantId',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->billingPolicy) {
            $this->billingPolicy->validate();
        }
        if (\is_array($this->parameter)) {
            Model::validateArray($this->parameter);
        }
        if (null !== $this->scheduleInfo) {
            $this->scheduleInfo->validate();
        }
        if (\is_array($this->subQuotaInfoList)) {
            Model::validateArray($this->subQuotaInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingPolicy) {
            $res['billingPolicy'] = null !== $this->billingPolicy ? $this->billingPolicy->toArray($noStream) : $this->billingPolicy;
        }

        if (null !== $this->cluster) {
            $res['cluster'] = $this->cluster;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }

        if (null !== $this->parameter) {
            if (\is_array($this->parameter)) {
                $res['parameter'] = [];
                foreach ($this->parameter as $key1 => $value1) {
                    $res['parameter'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->scheduleInfo) {
            $res['scheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toArray($noStream) : $this->scheduleInfo;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subQuotaInfoList) {
            if (\is_array($this->subQuotaInfoList)) {
                $res['subQuotaInfoList'] = [];
                $n1 = 0;
                foreach ($this->subQuotaInfoList as $item1) {
                    $res['subQuotaInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['billingPolicy'])) {
            $model->billingPolicy = billingPolicy::fromMap($map['billingPolicy']);
        }

        if (isset($map['cluster'])) {
            $model->cluster = $map['cluster'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }

        if (isset($map['parameter'])) {
            if (!empty($map['parameter'])) {
                $model->parameter = [];
                foreach ($map['parameter'] as $key1 => $value1) {
                    $model->parameter[$key1] = $value1;
                }
            }
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['scheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['scheduleInfo']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subQuotaInfoList'])) {
            if (!empty($map['subQuotaInfoList'])) {
                $model->subQuotaInfoList = [];
                $n1 = 0;
                foreach ($map['subQuotaInfoList'] as $item1) {
                    $model->subQuotaInfoList[$n1++] = subQuotaInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
