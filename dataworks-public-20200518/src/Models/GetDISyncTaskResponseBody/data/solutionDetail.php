<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncTaskResponseBody\data;

use AlibabaCloud\Tea\Model;

class solutionDetail extends Model
{
    /**
     * @example dataworks_di
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example 100
     *
     * @var int
     */
    public $id;

    /**
     * @example holo_20211206161025
     *
     * @var string
     */
    public $name;

    /**
     * @example {"holoDatasource":"holo","offlineSyncConfig":{"nodeNameRule":"oneclick_holo_di_${db_table_name_src}_to_${db_table_name_dest}","resourceGroup":"group_219193793999490"},"processRuleId":1007,"readerConcurrent":10,"realtimeSyncConfig":{"content":{"order":{"hops":[{"from":"reader","to":"writer"}]},"setting":{"speed":{"readerConcurrent":10}},"steps":[{"stepType":"mysql","name":"reader","category":"reader","parameter":{"connection":[{"datasource":"mm","datasourceType":"mysql","table":[]}]}},{"stepType":"holo","name":"writer","category":"writer","parameter":{"datasource":"holo","writeMode":"replay","datasourceSchema":"public","tableMappingRule":{"datasource":[{"tableRule":[],"srcDatasourceName":"mm"}]}}}]},"extend":{"mode":"migration_holo","resourceGroup":"group_219193793999490"}},"setting":{"autoCreateWorkflow":true,"userDefinedFileNameExpression":"oneclick"},"srcType":"mysql","tableMappingRuleFromRealtimeSyncConfig":{"datasource":[{"srcDatasourceName":"mm","tableRule":[]}]}}
     *
     * @var string
     */
    public $processContent;

    /**
     * @example {"processType":"new","tableNum":300}
     *
     * @var string
     */
    public $processExtra;

    /**
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @example mysql
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 2021-12-07 14:40:51
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @example 2021-12-07 14:40:51
     *
     * @var string
     */
    public $submitTime;

    /**
     * @example holo
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'creatorName'    => 'CreatorName',
        'id'             => 'Id',
        'name'           => 'Name',
        'processContent' => 'ProcessContent',
        'processExtra'   => 'ProcessExtra',
        'projectId'      => 'ProjectId',
        'sourceType'     => 'SourceType',
        'startTime'      => 'StartTime',
        'status'         => 'Status',
        'submitTime'     => 'SubmitTime',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->processContent) {
            $res['ProcessContent'] = $this->processContent;
        }
        if (null !== $this->processExtra) {
            $res['ProcessExtra'] = $this->processExtra;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProcessContent'])) {
            $model->processContent = $map['ProcessContent'];
        }
        if (isset($map['ProcessExtra'])) {
            $model->processExtra = $map['ProcessExtra'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
