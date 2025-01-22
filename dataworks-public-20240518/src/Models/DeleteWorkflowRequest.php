<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class DeleteWorkflowRequest extends Model
{
    /**
     * @var string
     */
    public $clientUniqueCode;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'clientUniqueCode' => 'ClientUniqueCode',
        'envType'          => 'EnvType',
        'id'               => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientUniqueCode) {
            $res['ClientUniqueCode'] = $this->clientUniqueCode;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['ClientUniqueCode'])) {
            $model->clientUniqueCode = $map['ClientUniqueCode'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
