<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeQuotaPlanResponseBody\data\planList\quota;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListComputeQuotaPlanResponseBody\data\planList\quota\subQuotaInfoList\parameter;
use AlibabaCloud\Tea\Model;

class subQuotaInfoList extends Model
{
    /**
     * @description Cluster ID.
     *
     * @example AT-120N
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The creation time.
     *
     * @example 1730946421757
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account that is used to create the resource.
     *
     * @example 672863518
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The ID of the level-2 quota.
     *
     * @example 6790
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the level-2 quota.
     *
     * @example dp_cn_shanghai_1702627945_p
     *
     * @var string
     */
    public $name;

    /**
     * @description The nickname of the level-2 quota.
     *
     * @example os_MyQuota
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The description of the level-2 quota.
     *
     * @example {
     * "enablePriority": false,
     * "minCU": 25,
     * "adhocCU": 0,
     * "elasticReservedCU": 0,
     * "forceReservedMin": false,
     * "maxCU": 50,
     * "schedulerType": "Fifo"
     * }
     *
     * @var parameter
     */
    public $parameter;

    /**
     * @description Region ID.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource status.
     *
     * @example ON
     *
     * @var string
     */
    public $status;

    /**
     * @description Tenant ID.
     *
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The type of quota.
     *
     * @example FUXI_ONLINE
     *
     * @var string
     */
    public $type;

    /**
     * @description The version number.
     *
     * @example 2056
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'cluster' => 'cluster',
        'createTime' => 'createTime',
        'creatorId' => 'creatorId',
        'id' => 'id',
        'name' => 'name',
        'nickName' => 'nickName',
        'parameter' => 'parameter',
        'regionId' => 'regionId',
        'status' => 'status',
        'tenantId' => 'tenantId',
        'type' => 'type',
        'version' => 'version',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
            $model->parameter = parameter::fromMap($map['parameter']);
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
