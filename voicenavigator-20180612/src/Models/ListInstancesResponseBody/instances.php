<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $status;
    protected $_name = [
        'applicableOperations' => 'ApplicableOperations',
        'concurrency'          => 'Concurrency',
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'modifyTime'           => 'ModifyTime',
        'modifyUserName'       => 'ModifyUserName',
        'name'                 => 'Name',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicableOperations) {
            $res['ApplicableOperations'] = $this->applicableOperations;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableOperations'])) {
            if (!empty($map['ApplicableOperations'])) {
                $model->applicableOperations = $map['ApplicableOperations'];
            }
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
