<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetTopicByIdResponseBody\data\structureSummary;

class data extends Model
{
    /**
     * @var string
     */
    public $asyncTaskId;

    /**
     * @var string
     */
    public $createUser;

    /**
     * @var int
     */
    public $hotValue;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var structureSummary[]
     */
    public $structureSummary;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var string
     */
    public $topicSource;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'asyncTaskId' => 'AsyncTaskId',
        'createUser' => 'CreateUser',
        'hotValue' => 'HotValue',
        'id' => 'Id',
        'status' => 'Status',
        'structureSummary' => 'StructureSummary',
        'summary' => 'Summary',
        'taskErrorMessage' => 'TaskErrorMessage',
        'taskStatus' => 'TaskStatus',
        'topic' => 'Topic',
        'topicSource' => 'TopicSource',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->structureSummary)) {
            Model::validateArray($this->structureSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTaskId) {
            $res['AsyncTaskId'] = $this->asyncTaskId;
        }

        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }

        if (null !== $this->hotValue) {
            $res['HotValue'] = $this->hotValue;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->structureSummary) {
            if (\is_array($this->structureSummary)) {
                $res['StructureSummary'] = [];
                $n1 = 0;
                foreach ($this->structureSummary as $item1) {
                    $res['StructureSummary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->taskErrorMessage) {
            $res['TaskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AsyncTaskId'])) {
            $model->asyncTaskId = $map['AsyncTaskId'];
        }

        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }

        if (isset($map['HotValue'])) {
            $model->hotValue = $map['HotValue'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StructureSummary'])) {
            if (!empty($map['StructureSummary'])) {
                $model->structureSummary = [];
                $n1 = 0;
                foreach ($map['StructureSummary'] as $item1) {
                    $model->structureSummary[$n1++] = structureSummary::fromMap($item1);
                }
            }
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TaskErrorMessage'])) {
            $model->taskErrorMessage = $map['TaskErrorMessage'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
