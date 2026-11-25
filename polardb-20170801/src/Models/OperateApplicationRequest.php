<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class OperateApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $componentTypes;

    /**
     * @var string
     */
    public $groupNames;

    /**
     * @var string
     */
    public $operation;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'componentTypes' => 'ComponentTypes',
        'groupNames' => 'GroupNames',
        'operation' => 'Operation',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->componentTypes) {
            $res['ComponentTypes'] = $this->componentTypes;
        }

        if (null !== $this->groupNames) {
            $res['GroupNames'] = $this->groupNames;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ComponentTypes'])) {
            $model->componentTypes = $map['ComponentTypes'];
        }

        if (isset($map['GroupNames'])) {
            $model->groupNames = $map['GroupNames'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        return $model;
    }
}
