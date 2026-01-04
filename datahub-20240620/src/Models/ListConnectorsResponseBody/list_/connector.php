<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Datahub\V20240620\Models\ListConnectorsResponseBody\list_;

use AlibabaCloud\Dara\Model;

class connector extends Model
{
    /**
     * @var string
     */
    public $columnFields;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $connectorId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $doneTime;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string
     */
    public $topicName;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'columnFields' => 'ColumnFields',
        'config' => 'Config',
        'connectorId' => 'ConnectorId',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'doneTime' => 'DoneTime',
        'projectName' => 'ProjectName',
        'state' => 'State',
        'subscriptionId' => 'SubscriptionId',
        'topicName' => 'TopicName',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnFields) {
            $res['ColumnFields'] = $this->columnFields;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->doneTime) {
            $res['DoneTime'] = $this->doneTime;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->subscriptionId) {
            $res['SubscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->topicName) {
            $res['TopicName'] = $this->topicName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['ColumnFields'])) {
            $model->columnFields = $map['ColumnFields'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DoneTime'])) {
            $model->doneTime = $map['DoneTime'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['SubscriptionId'])) {
            $model->subscriptionId = $map['SubscriptionId'];
        }

        if (isset($map['TopicName'])) {
            $model->topicName = $map['TopicName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
