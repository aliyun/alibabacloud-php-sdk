<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RunSmokeTestRequest extends Model
{
    /**
     * @var string
     */
    public $bizdate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeParams;

    /**
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'bizdate' => 'Bizdate',
        'name' => 'Name',
        'nodeId' => 'NodeId',
        'nodeParams' => 'NodeParams',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
