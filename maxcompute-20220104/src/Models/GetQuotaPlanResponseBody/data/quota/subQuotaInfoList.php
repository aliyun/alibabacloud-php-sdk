<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota\subQuotaInfoList\billingPolicy;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaPlanResponseBody\data\quota\subQuotaInfoList\scheduleInfo;
use AlibabaCloud\Tea\Model;

class subQuotaInfoList extends Model
{
    /**
     * @description The information of the order.
     *
     * @var billingPolicy
     */
    public $billingPolicy;

    /**
     * @description The ID of the cluster.
     *
     * @example AT-120N
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The time when the resource was created.
     *
     * @example 2022-09-06T02:14:44Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who created the quota plan.
     *
     * @example 672863518
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The ID of the level-2 quota.
     *
     * @example 1000048
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the level-2 quota.
     *
     * @example subquotaA
     *
     * @var string
     */
    public $name;

    /**
     * @description The alias of the level-2 quota.
     *
     * @example subquotaA
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The description of the quota.
     *
     * @var mixed[]
     */
    public $parameter;

    /**
     * @description The ID of the parent resource.
     *
     * @example 0
     *
     * @var string
     */
    public $parentId;

    /**
     * @description The ID of the region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The information of the scheduling plan.
     *
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @description The status of the resource.
     *
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @description The tag of the resource for the quota.
     *
     * @example abc
     *
     * @var string
     */
    public $tag;

    /**
     * @description The ID of the tenant.
     *
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The type of the resource system. This parameter corresponds to the resourceSystemType parameter of the cluster.
     *
     * @example FUXI_ONLINE
     *
     * @var string
     */
    public $type;

    /**
     * @description The version number.
     *
     * @example 1
     *
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
        'tag' => 'tag',
        'tenantId' => 'tenantId',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingPolicy) {
            $res['billingPolicy'] = null !== $this->billingPolicy ? $this->billingPolicy->toMap() : null;
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
            $res['parameter'] = $this->parameter;
        }
        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->scheduleInfo) {
            $res['scheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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

    /**
     * @param array $map
     *
     * @return subQuotaInfoList
     */
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
            $model->parameter = $map['parameter'];
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
