<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLivyComputeSessionsResponseBody;

use AlibabaCloud\Dara\Model;

class sessions extends Model
{
    /**
     * @var string
     */
    public $computeId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var float
     */
    public $cuHours;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $info;

    /**
     * @var int
     */
    public $mbSeconds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $queue;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $sparkConf;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $vcoreSeconds;

    /**
     * @var string
     */
    public $webUI;
    protected $_name = [
        'computeId' => 'computeId',
        'createTime' => 'createTime',
        'cuHours' => 'cuHours',
        'endTime' => 'endTime',
        'info' => 'info',
        'mbSeconds' => 'mbSeconds',
        'name' => 'name',
        'queue' => 'queue',
        'sessionId' => 'sessionId',
        'sparkConf' => 'sparkConf',
        'state' => 'state',
        'vcoreSeconds' => 'vcoreSeconds',
        'webUI' => 'webUI',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeId) {
            $res['computeId'] = $this->computeId;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->cuHours) {
            $res['cuHours'] = $this->cuHours;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->info) {
            $res['info'] = $this->info;
        }

        if (null !== $this->mbSeconds) {
            $res['mbSeconds'] = $this->mbSeconds;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->queue) {
            $res['queue'] = $this->queue;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sparkConf) {
            $res['sparkConf'] = $this->sparkConf;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->vcoreSeconds) {
            $res['vcoreSeconds'] = $this->vcoreSeconds;
        }

        if (null !== $this->webUI) {
            $res['webUI'] = $this->webUI;
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
        if (isset($map['computeId'])) {
            $model->computeId = $map['computeId'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['cuHours'])) {
            $model->cuHours = $map['cuHours'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['info'])) {
            $model->info = $map['info'];
        }

        if (isset($map['mbSeconds'])) {
            $model->mbSeconds = $map['mbSeconds'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['queue'])) {
            $model->queue = $map['queue'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sparkConf'])) {
            $model->sparkConf = $map['sparkConf'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['vcoreSeconds'])) {
            $model->vcoreSeconds = $map['vcoreSeconds'];
        }

        if (isset($map['webUI'])) {
            $model->webUI = $map['webUI'];
        }

        return $model;
    }
}
