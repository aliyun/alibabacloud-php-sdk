<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulListRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uuids;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var string
     */
    public $necessity;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var string
     */
    public $batchName;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var int
     */
    public $createTsStart;

    /**
     * @var int
     */
    public $createTsEnd;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $modifyTsStart;

    /**
     * @var int
     */
    public $modifyTsEnd;

    /**
     * @var string
     */
    public $attachTypes;

    /**
     * @var string
     */
    public $containerFieldName;

    /**
     * @var string
     */
    public $containerFieldValue;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $minScore;

    /**
     * @var string
     */
    public $vpcInstanceIds;
    protected $_name = [
        'sourceIp'            => 'SourceIp',
        'lang'                => 'Lang',
        'ids'                 => 'Ids',
        'remark'              => 'Remark',
        'groupId'             => 'GroupId',
        'type'                => 'Type',
        'uuids'               => 'Uuids',
        'name'                => 'Name',
        'aliasName'           => 'AliasName',
        'level'               => 'Level',
        'statusList'          => 'StatusList',
        'necessity'           => 'Necessity',
        'dealed'              => 'Dealed',
        'batchName'           => 'BatchName',
        'resource'            => 'Resource',
        'createTsStart'       => 'CreateTsStart',
        'createTsEnd'         => 'CreateTsEnd',
        'currentPage'         => 'CurrentPage',
        'pageSize'            => 'PageSize',
        'modifyTsStart'       => 'ModifyTsStart',
        'modifyTsEnd'         => 'ModifyTsEnd',
        'attachTypes'         => 'AttachTypes',
        'containerFieldName'  => 'ContainerFieldName',
        'containerFieldValue' => 'ContainerFieldValue',
        'targetType'          => 'TargetType',
        'clusterId'           => 'ClusterId',
        'minScore'            => 'MinScore',
        'vpcInstanceIds'      => 'VpcInstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->necessity) {
            $res['Necessity'] = $this->necessity;
        }
        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }
        if (null !== $this->batchName) {
            $res['BatchName'] = $this->batchName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->createTsStart) {
            $res['CreateTsStart'] = $this->createTsStart;
        }
        if (null !== $this->createTsEnd) {
            $res['CreateTsEnd'] = $this->createTsEnd;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->modifyTsStart) {
            $res['ModifyTsStart'] = $this->modifyTsStart;
        }
        if (null !== $this->modifyTsEnd) {
            $res['ModifyTsEnd'] = $this->modifyTsEnd;
        }
        if (null !== $this->attachTypes) {
            $res['AttachTypes'] = $this->attachTypes;
        }
        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }
        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }
        if (null !== $this->vpcInstanceIds) {
            $res['VpcInstanceIds'] = $this->vpcInstanceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Necessity'])) {
            $model->necessity = $map['Necessity'];
        }
        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }
        if (isset($map['BatchName'])) {
            $model->batchName = $map['BatchName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['CreateTsStart'])) {
            $model->createTsStart = $map['CreateTsStart'];
        }
        if (isset($map['CreateTsEnd'])) {
            $model->createTsEnd = $map['CreateTsEnd'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ModifyTsStart'])) {
            $model->modifyTsStart = $map['ModifyTsStart'];
        }
        if (isset($map['ModifyTsEnd'])) {
            $model->modifyTsEnd = $map['ModifyTsEnd'];
        }
        if (isset($map['AttachTypes'])) {
            $model->attachTypes = $map['AttachTypes'];
        }
        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }
        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }
        if (isset($map['VpcInstanceIds'])) {
            $model->vpcInstanceIds = $map['VpcInstanceIds'];
        }

        return $model;
    }
}
