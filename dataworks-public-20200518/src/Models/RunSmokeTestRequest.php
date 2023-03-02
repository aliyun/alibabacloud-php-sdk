<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunSmokeTestRequest extends Model
{
    /**
     * @description The data timestamp.
     *
     * @example 2020-05-26 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @description The name of the workflow.
     *
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the node. You can call the [ListNodes](~~173979~~) operation to query the ID.
     *
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
     * A workspace in basic mode does not have a development environment. For more information, see [Basic mode and standard mode](~~85772~~).
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
