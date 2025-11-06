<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetTaskByUidResponseBody\data\voList;

use AlibabaCloud\Dara\Model;

class importDefinitionTaskDO extends Model
{
    /**
     * @var int
     */
    public $bindingNum;

    /**
     * @var int
     */
    public $exchangeNum;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $importType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $queueNum;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $vhostName;

    /**
     * @var int
     */
    public $vhostNum;
    protected $_name = [
        'bindingNum' => 'BindingNum',
        'exchangeNum' => 'ExchangeNum',
        'gmtCreate' => 'GmtCreate',
        'id' => 'Id',
        'importType' => 'ImportType',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'queueNum' => 'QueueNum',
        'status' => 'Status',
        'userId' => 'UserId',
        'vhostName' => 'VhostName',
        'vhostNum' => 'VhostNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingNum) {
            $res['BindingNum'] = $this->bindingNum;
        }

        if (null !== $this->exchangeNum) {
            $res['ExchangeNum'] = $this->exchangeNum;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->importType) {
            $res['ImportType'] = $this->importType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->queueNum) {
            $res['QueueNum'] = $this->queueNum;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
        }

        if (null !== $this->vhostNum) {
            $res['VhostNum'] = $this->vhostNum;
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
        if (isset($map['BindingNum'])) {
            $model->bindingNum = $map['BindingNum'];
        }

        if (isset($map['ExchangeNum'])) {
            $model->exchangeNum = $map['ExchangeNum'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImportType'])) {
            $model->importType = $map['ImportType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['QueueNum'])) {
            $model->queueNum = $map['QueueNum'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        if (isset($map['VhostNum'])) {
            $model->vhostNum = $map['VhostNum'];
        }

        return $model;
    }
}
