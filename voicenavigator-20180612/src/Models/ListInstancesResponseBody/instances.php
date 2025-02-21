<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class instances extends Model
{
    /**
     * @var string[]
     */
    public $applicableOperations;
    /**
     * @var int
     */
    public $concurrency;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $modifyTime;
    /**
     * @var string
     */
    public $modifyUserName;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nluServiceParamsJson;
    /**
     * @var string[]
     */
    public $numbers;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $unionInstanceId;
    /**
     * @var string
     */
    public $unionSource;
    protected $_name = [
        'applicableOperations' => 'ApplicableOperations',
        'concurrency'          => 'Concurrency',
        'createTime'           => 'CreateTime',
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'modifyTime'           => 'ModifyTime',
        'modifyUserName'       => 'ModifyUserName',
        'name'                 => 'Name',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'numbers'              => 'Numbers',
        'status'               => 'Status',
        'unionInstanceId'      => 'UnionInstanceId',
        'unionSource'          => 'UnionSource',
    ];

    public function validate()
    {
        if (\is_array($this->applicableOperations)) {
            Model::validateArray($this->applicableOperations);
        }
        if (\is_array($this->numbers)) {
            Model::validateArray($this->numbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicableOperations) {
            if (\is_array($this->applicableOperations)) {
                $res['ApplicableOperations'] = [];
                $n1                          = 0;
                foreach ($this->applicableOperations as $item1) {
                    $res['ApplicableOperations'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->modifyUserName) {
            $res['ModifyUserName'] = $this->modifyUserName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nluServiceParamsJson) {
            $res['NluServiceParamsJson'] = $this->nluServiceParamsJson;
        }

        if (null !== $this->numbers) {
            if (\is_array($this->numbers)) {
                $res['Numbers'] = [];
                $n1             = 0;
                foreach ($this->numbers as $item1) {
                    $res['Numbers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unionInstanceId) {
            $res['UnionInstanceId'] = $this->unionInstanceId;
        }

        if (null !== $this->unionSource) {
            $res['UnionSource'] = $this->unionSource;
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
        if (isset($map['ApplicableOperations'])) {
            if (!empty($map['ApplicableOperations'])) {
                $model->applicableOperations = [];
                $n1                          = 0;
                foreach ($map['ApplicableOperations'] as $item1) {
                    $model->applicableOperations[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['ModifyUserName'])) {
            $model->modifyUserName = $map['ModifyUserName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NluServiceParamsJson'])) {
            $model->nluServiceParamsJson = $map['NluServiceParamsJson'];
        }

        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = [];
                $n1             = 0;
                foreach ($map['Numbers'] as $item1) {
                    $model->numbers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnionInstanceId'])) {
            $model->unionInstanceId = $map['UnionInstanceId'];
        }

        if (isset($map['UnionSource'])) {
            $model->unionSource = $map['UnionSource'];
        }

        return $model;
    }
}
