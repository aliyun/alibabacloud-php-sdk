<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class TaskInvocation extends Model
{
    /**
     * @example c-nkj8shz7xxxx
     *
     * @var string
     */
    public $instanceID;

    /**
     * @example E099843B-10A2-4936-9964-4E0EE263D564
     *
     * @var string
     */
    public $invocationID;

    /**
     * @example acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx
     *
     * @var string
     */
    public $invocationTarget;

    /**
     * @example {"key1":"value1","key2":"value2"}
     *
     * @var string
     */
    public $output;

    /**
     * @example 1B3058B1-F1C9-457C-B95C-2C250A4B3118
     *
     * @var string
     */
    public $requestID;

    /**
     * @example my-sls-logstore
     *
     * @var string
     */
    public $slsLogStore;

    /**
     * @example my-sls-project
     *
     * @var string
     */
    public $slsProject;

    /**
     * @example success
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceID'       => 'instanceID',
        'invocationID'     => 'invocationID',
        'invocationTarget' => 'invocationTarget',
        'output'           => 'output',
        'requestID'        => 'requestID',
        'slsLogStore'      => 'slsLogStore',
        'slsProject'       => 'slsProject',
        'status'           => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return TaskInvocation
     */
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
