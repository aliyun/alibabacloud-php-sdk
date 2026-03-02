<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MqGroup extends Model
{
    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $messageType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'env' => 'env',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'groupId' => 'groupId',
        'id' => 'id',
        'messageType' => 'messageType',
        'protocolType' => 'protocolType',
        'remark' => 'remark',
        'requestId' => 'requestId',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->messageType) {
            $res['messageType'] = $this->messageType;
        }

        if (null !== $this->protocolType) {
            $res['protocolType'] = $this->protocolType;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['messageType'])) {
            $model->messageType = $map['messageType'];
        }

        if (isset($map['protocolType'])) {
            $model->protocolType = $map['protocolType'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
