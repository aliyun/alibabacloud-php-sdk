<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $abilityType;

    /**
     * @var string[]
     */
    public $applicableOperations;

    /**
     * @example 10
     *
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $description;

    /**
     * @example test1_instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1532436395329
     *
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
     * @example 14C39896-AE6D-4643-9C9A-E0566B2C2DDD
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Drafted
     *
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
        'abilityType'          => 'AbilityType',
        'applicableOperations' => 'ApplicableOperations',
        'concurrency'          => 'Concurrency',
        'description'          => 'Description',
        'instanceId'           => 'InstanceId',
        'modifyTime'           => 'ModifyTime',
        'modifyUserName'       => 'ModifyUserName',
        'name'                 => 'Name',
        'nluServiceParamsJson' => 'NluServiceParamsJson',
        'requestId'            => 'RequestId',
        'status'               => 'Status',
        'unionInstanceId'      => 'UnionInstanceId',
        'unionSource'          => 'UnionSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abilityType) {
            $res['AbilityType'] = $this->abilityType;
        }
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
        if (null !== $this->nluServiceParamsJson) {
            $res['NluServiceParamsJson'] = $this->nluServiceParamsJson;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbilityType'])) {
            $model->abilityType = $map['AbilityType'];
        }
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
        if (isset($map['NluServiceParamsJson'])) {
            $model->nluServiceParamsJson = $map['NluServiceParamsJson'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
