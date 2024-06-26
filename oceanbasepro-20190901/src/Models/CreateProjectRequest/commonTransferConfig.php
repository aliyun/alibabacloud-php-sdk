<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\commonTransferConfig\customColumns;
use AlibabaCloud\Tea\Model;

class commonTransferConfig extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $activeActive;

    /**
     * @var customColumns[]
     */
    public $customColumns;

    /**
     * @example null
     *
     * @var string
     */
    public $dataWorksBusinessName;

    /**
     * @example TUPLE
     *
     * @var string
     */
    public $datahubTopicType;

    /**
     * @example 0
     *
     * @var int
     */
    public $mqPartition;

    /**
     * @example ONE
     *
     * @var string
     */
    public $mqPartitionMode;

    /**
     * @example DEFAULT
     *
     * @var string
     */
    public $mqSerializerType;

    /**
     * @example false
     *
     * @var bool
     */
    public $rocketMqEnableMsgTrace;

    /**
     * @example default_tag
     *
     * @var string
     */
    public $rocketMqMsgTags;

    /**
     * @example OMS
     *
     * @var string
     */
    public $rocketMqProducerGroup;

    /**
     * @example null
     *
     * @var int
     */
    public $rocketMqSendMsgTimeout;

    /**
     * @var string
     */
    public $sinkStoreFormat;

    /**
     * @var string
     */
    public $sourceStoreFormat;

    /**
     * @var bool
     */
    public $syncSchema;

    /**
     * @var string
     */
    public $syncSchemaColumnName;

    /**
     * @example ALL
     *
     * @var string
     */
    public $tableCategory;
    protected $_name = [
        'activeActive'           => 'ActiveActive',
        'customColumns'          => 'CustomColumns',
        'dataWorksBusinessName'  => 'DataWorksBusinessName',
        'datahubTopicType'       => 'DatahubTopicType',
        'mqPartition'            => 'MqPartition',
        'mqPartitionMode'        => 'MqPartitionMode',
        'mqSerializerType'       => 'MqSerializerType',
        'rocketMqEnableMsgTrace' => 'RocketMqEnableMsgTrace',
        'rocketMqMsgTags'        => 'RocketMqMsgTags',
        'rocketMqProducerGroup'  => 'RocketMqProducerGroup',
        'rocketMqSendMsgTimeout' => 'RocketMqSendMsgTimeout',
        'sinkStoreFormat'        => 'SinkStoreFormat',
        'sourceStoreFormat'      => 'SourceStoreFormat',
        'syncSchema'             => 'SyncSchema',
        'syncSchemaColumnName'   => 'SyncSchemaColumnName',
        'tableCategory'          => 'TableCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeActive) {
            $res['ActiveActive'] = $this->activeActive;
        }
        if (null !== $this->customColumns) {
            $res['CustomColumns'] = [];
            if (null !== $this->customColumns && \is_array($this->customColumns)) {
                $n = 0;
                foreach ($this->customColumns as $item) {
                    $res['CustomColumns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataWorksBusinessName) {
            $res['DataWorksBusinessName'] = $this->dataWorksBusinessName;
        }
        if (null !== $this->datahubTopicType) {
            $res['DatahubTopicType'] = $this->datahubTopicType;
        }
        if (null !== $this->mqPartition) {
            $res['MqPartition'] = $this->mqPartition;
        }
        if (null !== $this->mqPartitionMode) {
            $res['MqPartitionMode'] = $this->mqPartitionMode;
        }
        if (null !== $this->mqSerializerType) {
            $res['MqSerializerType'] = $this->mqSerializerType;
        }
        if (null !== $this->rocketMqEnableMsgTrace) {
            $res['RocketMqEnableMsgTrace'] = $this->rocketMqEnableMsgTrace;
        }
        if (null !== $this->rocketMqMsgTags) {
            $res['RocketMqMsgTags'] = $this->rocketMqMsgTags;
        }
        if (null !== $this->rocketMqProducerGroup) {
            $res['RocketMqProducerGroup'] = $this->rocketMqProducerGroup;
        }
        if (null !== $this->rocketMqSendMsgTimeout) {
            $res['RocketMqSendMsgTimeout'] = $this->rocketMqSendMsgTimeout;
        }
        if (null !== $this->sinkStoreFormat) {
            $res['SinkStoreFormat'] = $this->sinkStoreFormat;
        }
        if (null !== $this->sourceStoreFormat) {
            $res['SourceStoreFormat'] = $this->sourceStoreFormat;
        }
        if (null !== $this->syncSchema) {
            $res['SyncSchema'] = $this->syncSchema;
        }
        if (null !== $this->syncSchemaColumnName) {
            $res['SyncSchemaColumnName'] = $this->syncSchemaColumnName;
        }
        if (null !== $this->tableCategory) {
            $res['TableCategory'] = $this->tableCategory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveActive'])) {
            $model->activeActive = $map['ActiveActive'];
        }
        if (isset($map['CustomColumns'])) {
            if (!empty($map['CustomColumns'])) {
                $model->customColumns = [];
                $n                    = 0;
                foreach ($map['CustomColumns'] as $item) {
                    $model->customColumns[$n++] = null !== $item ? customColumns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataWorksBusinessName'])) {
            $model->dataWorksBusinessName = $map['DataWorksBusinessName'];
        }
        if (isset($map['DatahubTopicType'])) {
            $model->datahubTopicType = $map['DatahubTopicType'];
        }
        if (isset($map['MqPartition'])) {
            $model->mqPartition = $map['MqPartition'];
        }
        if (isset($map['MqPartitionMode'])) {
            $model->mqPartitionMode = $map['MqPartitionMode'];
        }
        if (isset($map['MqSerializerType'])) {
            $model->mqSerializerType = $map['MqSerializerType'];
        }
        if (isset($map['RocketMqEnableMsgTrace'])) {
            $model->rocketMqEnableMsgTrace = $map['RocketMqEnableMsgTrace'];
        }
        if (isset($map['RocketMqMsgTags'])) {
            $model->rocketMqMsgTags = $map['RocketMqMsgTags'];
        }
        if (isset($map['RocketMqProducerGroup'])) {
            $model->rocketMqProducerGroup = $map['RocketMqProducerGroup'];
        }
        if (isset($map['RocketMqSendMsgTimeout'])) {
            $model->rocketMqSendMsgTimeout = $map['RocketMqSendMsgTimeout'];
        }
        if (isset($map['SinkStoreFormat'])) {
            $model->sinkStoreFormat = $map['SinkStoreFormat'];
        }
        if (isset($map['SourceStoreFormat'])) {
            $model->sourceStoreFormat = $map['SourceStoreFormat'];
        }
        if (isset($map['SyncSchema'])) {
            $model->syncSchema = $map['SyncSchema'];
        }
        if (isset($map['SyncSchemaColumnName'])) {
            $model->syncSchemaColumnName = $map['SyncSchemaColumnName'];
        }
        if (isset($map['TableCategory'])) {
            $model->tableCategory = $map['TableCategory'];
        }

        return $model;
    }
}
