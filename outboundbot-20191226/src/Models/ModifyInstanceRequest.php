<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $maxConcurrentConversation;
    protected $_name = [
        'callingNumber' => 'CallingNumber',
        'instanceDescription' => 'InstanceDescription',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumber)) {
            Model::validateArray($this->callingNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumber) {
            if (\is_array($this->callingNumber)) {
                $res['CallingNumber'] = [];
                $n1 = 0;
                foreach ($this->callingNumber as $item1) {
                    $res['CallingNumber'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
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
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = [];
                $n1 = 0;
                foreach ($map['CallingNumber'] as $item1) {
                    $model->callingNumber[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }

        return $model;
    }
}
