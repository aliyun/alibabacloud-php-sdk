<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateDataSourceSharedRuleRequest extends Model
{
    /**
     * @var int
     */
    public $dataSourceId;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var string
     */
    public $sharedUser;
    /**
     * @var int
     */
    public $targetProjectId;
    protected $_name = [
        'dataSourceId'    => 'DataSourceId',
        'envType'         => 'EnvType',
        'sharedUser'      => 'SharedUser',
        'targetProjectId' => 'TargetProjectId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->sharedUser) {
            $res['SharedUser'] = $this->sharedUser;
        }

        if (null !== $this->targetProjectId) {
            $res['TargetProjectId'] = $this->targetProjectId;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['SharedUser'])) {
            $model->sharedUser = $map['SharedUser'];
        }

        if (isset($map['TargetProjectId'])) {
            $model->targetProjectId = $map['TargetProjectId'];
        }

        return $model;
    }
}
