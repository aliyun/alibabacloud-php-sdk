<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\ListDataLevelPermissionWhiteListResponseBody\result\usersModel;

class result extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var usersModel
     */
    public $usersModel;
    protected $_name = [
        'cubeId' => 'CubeId',
        'ruleType' => 'RuleType',
        'usersModel' => 'UsersModel',
    ];

    public function validate()
    {
        if (null !== $this->usersModel) {
            $this->usersModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->usersModel) {
            $res['UsersModel'] = null !== $this->usersModel ? $this->usersModel->toArray($noStream) : $this->usersModel;
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['UsersModel'])) {
            $model->usersModel = usersModel::fromMap($map['UsersModel']);
        }

        return $model;
    }
}
