<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ChangeRecallManagementServiceVersionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recallManagementServiceVersionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'recallManagementServiceVersionId' => 'RecallManagementServiceVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->recallManagementServiceVersionId) {
            $res['RecallManagementServiceVersionId'] = $this->recallManagementServiceVersionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RecallManagementServiceVersionId'])) {
            $model->recallManagementServiceVersionId = $map['RecallManagementServiceVersionId'];
        }

        return $model;
    }
}
