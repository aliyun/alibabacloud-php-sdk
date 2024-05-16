<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunSmokeTestRequest extends Model
{
    /**
     * @description The data timestamp.
     *
     * This parameter is required.
     * @example 2020-05-26 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The name of the workflow.
     *
     * This parameter is required.
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the node. You can call the [ListNodes](https://help.aliyun.com/document_detail/173979.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The parameters related to the node. Set this parameter to a JSON string. A key in the string indicates a parameter, and a value in the string indicates the value of the related parameter.
     *
     * @example bizdate=$bizdate tbods=$tbods
     *
     * @var string
     */
    public $nodeParams;

    /**
     * @description The environment of the workspace. Valid values: PROD and DEV. The value PROD indicates the production environment, and the value DEV indicates the development environment.
     *
     * This parameter is required.
     * @example PROD
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'bizdate'    => 'Bizdate',
        'name'       => 'Name',
        'nodeId'     => 'NodeId',
        'nodeParams' => 'NodeParams',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeParams) {
            $res['NodeParams'] = $this->nodeParams;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunSmokeTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeParams'])) {
            $model->nodeParams = $map['NodeParams'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
