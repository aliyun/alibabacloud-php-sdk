<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody\data\billingPolicy;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody\data\saleTag;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody\data\scheduleInfo;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaResponseBody\data\subQuotaInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var billingPolicy
     */
    public $billingPolicy;

    /**
     * @example AT-120N
     *
     * @var string
     */
    public $cluster;

    /**
     * @example 2022-09-06T02:14:44Z
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 672863518
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @example 0
     *
     * @var string
     */
    public $id;

    /**
     * @example quota_a
     *
     * @var string
     */
    public $name;

    /**
     * @example quota_nickname
     *
     * @var string
     */
    public $nickName;

    /**
     * @var mixed[]
     */
    public $parameter;

    /**
     * @example null
     *
     * @var string
     */
    public $parentId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @var saleTag
     */
    public $saleTag;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @var subQuotaInfoList[]
     */
    public $subQuotaInfoList;

    /**
     * @example abc
     *
     * @var string
     */
    public $tag;

    /**
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example FUXI_ONLINE
     *
     * @var string
     */
    public $type;

    /**
     * @example 1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'billingPolicy'    => 'billingPolicy',
        'cluster'          => 'cluster',
        'createTime'       => 'createTime',
        'creatorId'        => 'creatorId',
        'groupName'        => 'groupName',
        'id'               => 'id',
        'name'             => 'name',
        'nickName'         => 'nickName',
        'parameter'        => 'parameter',
        'parentId'         => 'parentId',
        'regionId'         => 'regionId',
        'saleTag'          => 'saleTag',
        'scheduleInfo'     => 'scheduleInfo',
        'status'           => 'status',
        'subQuotaInfoList' => 'subQuotaInfoList',
        'tag'              => 'tag',
        'tenantId'         => 'tenantId',
        'type'             => 'type',
        'version'          => 'version',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
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
        if (null !== $this->saleTag) {
            $res['saleTag'] = null !== $this->saleTag ? $this->saleTag->toMap() : null;
        }
        if (null !== $this->scheduleInfo) {
            $res['scheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subQuotaInfoList) {
            $res['subQuotaInfoList'] = [];
            if (null !== $this->subQuotaInfoList && \is_array($this->subQuotaInfoList)) {
                $n = 0;
                foreach ($this->subQuotaInfoList as $item) {
                    $res['subQuotaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
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
        if (isset($map['saleTag'])) {
            $model->saleTag = saleTag::fromMap($map['saleTag']);
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
                $n                       = 0;
                foreach ($map['subQuotaInfoList'] as $item) {
                    $model->subQuotaInfoList[$n++] = null !== $item ? subQuotaInfoList::fromMap($item) : $item;
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
