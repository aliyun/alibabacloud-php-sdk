<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\ListAICPublicKeyDeliveriesResponseBody;

use AlibabaCloud\Dara\Model;

class publicKeyDeliverInfo extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $keyGroup;

    /**
     * @var string
     */
    public $keyName;

    /**
     * @var string
     */
    public $keyType;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'instanceId' => 'InstanceId',
        'keyGroup' => 'KeyGroup',
        'keyName' => 'KeyName',
        'keyType' => 'KeyType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->keyGroup) {
            $res['KeyGroup'] = $this->keyGroup;
        }

        if (null !== $this->keyName) {
            $res['KeyName'] = $this->keyName;
        }

        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
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
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['KeyGroup'])) {
            $model->keyGroup = $map['KeyGroup'];
        }

        if (isset($map['KeyName'])) {
            $model->keyName = $map['KeyName'];
        }

        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }

        return $model;
    }
}
