<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class TaskInvocation extends Model
{
    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $invocationID;

    /**
     * @var string
     */
    public $invocationTarget;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $requestID;

    /**
     * @var string
     */
    public $slsLogStore;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceID' => 'instanceID',
        'invocationID' => 'invocationID',
        'invocationTarget' => 'invocationTarget',
        'output' => 'output',
        'requestID' => 'requestID',
        'slsLogStore' => 'slsLogStore',
        'slsProject' => 'slsProject',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceID) {
            $res['instanceID'] = $this->instanceID;
        }

        if (null !== $this->invocationID) {
            $res['invocationID'] = $this->invocationID;
        }

        if (null !== $this->invocationTarget) {
            $res['invocationTarget'] = $this->invocationTarget;
        }

        if (null !== $this->output) {
            $res['output'] = $this->output;
        }

        if (null !== $this->requestID) {
            $res['requestID'] = $this->requestID;
        }

        if (null !== $this->slsLogStore) {
            $res['slsLogStore'] = $this->slsLogStore;
        }

        if (null !== $this->slsProject) {
            $res['slsProject'] = $this->slsProject;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['instanceID'])) {
            $model->instanceID = $map['instanceID'];
        }

        if (isset($map['invocationID'])) {
            $model->invocationID = $map['invocationID'];
        }

        if (isset($map['invocationTarget'])) {
            $model->invocationTarget = $map['invocationTarget'];
        }

        if (isset($map['output'])) {
            $model->output = $map['output'];
        }

        if (isset($map['requestID'])) {
            $model->requestID = $map['requestID'];
        }

        if (isset($map['slsLogStore'])) {
            $model->slsLogStore = $map['slsLogStore'];
        }

        if (isset($map['slsProject'])) {
            $model->slsProject = $map['slsProject'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
