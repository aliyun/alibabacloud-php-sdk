<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLorneTasksResponseBody;

use AlibabaCloud\Tea\Model;

class taskDetails extends Model
{
    /**
     * @var string
     */
    public $checkpoint;

    /**
     * @var string
     */
    public $columnMapper;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sinkInstance;

    /**
     * @var string
     */
    public $sinkRegion;

    /**
     * @var string
     */
    public $sinkSchema;

    /**
     * @var string
     */
    public $sinkTable;

    /**
     * @var string
     */
    public $sinkType;

    /**
     * @var string
     */
    public $sinkUser;

    /**
     * @var string
     */
    public $sinkVpcId;

    /**
     * @var string
     */
    public $sourceProject;

    /**
     * @var string
     */
    public $sourceRegion;

    /**
     * @var string
     */
    public $sourceTopic;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $strict;
    protected $_name = [
        'checkpoint'    => 'Checkpoint',
        'columnMapper'  => 'ColumnMapper',
        'createTime'    => 'CreateTime',
        'description'   => 'Description',
        'id'            => 'Id',
        'message'       => 'Message',
        'name'          => 'Name',
        'sinkInstance'  => 'SinkInstance',
        'sinkRegion'    => 'SinkRegion',
        'sinkSchema'    => 'SinkSchema',
        'sinkTable'     => 'SinkTable',
        'sinkType'      => 'SinkType',
        'sinkUser'      => 'SinkUser',
        'sinkVpcId'     => 'SinkVpcId',
        'sourceProject' => 'SourceProject',
        'sourceRegion'  => 'SourceRegion',
        'sourceTopic'   => 'SourceTopic',
        'sourceType'    => 'SourceType',
        'state'         => 'State',
        'strict'        => 'Strict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkpoint) {
            $res['Checkpoint'] = $this->checkpoint;
        }
        if (null !== $this->columnMapper) {
            $res['ColumnMapper'] = $this->columnMapper;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sinkInstance) {
            $res['SinkInstance'] = $this->sinkInstance;
        }
        if (null !== $this->sinkRegion) {
            $res['SinkRegion'] = $this->sinkRegion;
        }
        if (null !== $this->sinkSchema) {
            $res['SinkSchema'] = $this->sinkSchema;
        }
        if (null !== $this->sinkTable) {
            $res['SinkTable'] = $this->sinkTable;
        }
        if (null !== $this->sinkType) {
            $res['SinkType'] = $this->sinkType;
        }
        if (null !== $this->sinkUser) {
            $res['SinkUser'] = $this->sinkUser;
        }
        if (null !== $this->sinkVpcId) {
            $res['SinkVpcId'] = $this->sinkVpcId;
        }
        if (null !== $this->sourceProject) {
            $res['SourceProject'] = $this->sourceProject;
        }
        if (null !== $this->sourceRegion) {
            $res['SourceRegion'] = $this->sourceRegion;
        }
        if (null !== $this->sourceTopic) {
            $res['SourceTopic'] = $this->sourceTopic;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Checkpoint'])) {
            $model->checkpoint = $map['Checkpoint'];
        }
        if (isset($map['ColumnMapper'])) {
            $model->columnMapper = $map['ColumnMapper'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SinkInstance'])) {
            $model->sinkInstance = $map['SinkInstance'];
        }
        if (isset($map['SinkRegion'])) {
            $model->sinkRegion = $map['SinkRegion'];
        }
        if (isset($map['SinkSchema'])) {
            $model->sinkSchema = $map['SinkSchema'];
        }
        if (isset($map['SinkTable'])) {
            $model->sinkTable = $map['SinkTable'];
        }
        if (isset($map['SinkType'])) {
            $model->sinkType = $map['SinkType'];
        }
        if (isset($map['SinkUser'])) {
            $model->sinkUser = $map['SinkUser'];
        }
        if (isset($map['SinkVpcId'])) {
            $model->sinkVpcId = $map['SinkVpcId'];
        }
        if (isset($map['SourceProject'])) {
            $model->sourceProject = $map['SourceProject'];
        }
        if (isset($map['SourceRegion'])) {
            $model->sourceRegion = $map['SourceRegion'];
        }
        if (isset($map['SourceTopic'])) {
            $model->sourceTopic = $map['SourceTopic'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        return $model;
    }
}
