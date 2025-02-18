<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaPlanResponseBody\data\quota;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetComputeQuotaPlanResponseBody\data\quota\subQuotaInfoList\parameter;

class subQuotaInfoList extends Model
{
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
     * @var parameter
     */
    public $parameter;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $status;
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
        'cluster'    => 'cluster',
        'createTime' => 'createTime',
        'creatorId'  => 'creatorId',
        'id'         => 'id',
        'name'       => 'name',
        'nickName'   => 'nickName',
        'parameter'  => 'parameter',
        'regionId'   => 'regionId',
        'status'     => 'status',
        'tenantId'   => 'tenantId',
        'type'       => 'type',
        'version'    => 'version',
    ];

    public function validate()
    {
        if (null !== $this->parameter) {
            $this->parameter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['parameter'] = null !== $this->parameter ? $this->parameter->toArray($noStream) : $this->parameter;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
