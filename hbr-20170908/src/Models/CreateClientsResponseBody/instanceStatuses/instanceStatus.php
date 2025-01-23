<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\CreateClientsResponseBody\instanceStatuses;

use AlibabaCloud\Dara\Model;

class instanceStatus extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $validInstance;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'validInstance' => 'ValidInstance',
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

        if (null !== $this->validInstance) {
            $res['ValidInstance'] = $this->validInstance;
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

        if (isset($map['ValidInstance'])) {
            $model->validInstance = $map['ValidInstance'];
        }

        return $model;
    }
}
