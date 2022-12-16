<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateDagTestRequest extends Model
{
    /**
     * @example 2020-05-26 00:00:00
     *
     * @var string
     */
    public $bizdate;

    /**
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example bizdate=$bizdate tbods=$tbods
     *
     * @var string
     */
    public $nodeParams;

    /**
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
     * @return CreateDagTestRequest
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
