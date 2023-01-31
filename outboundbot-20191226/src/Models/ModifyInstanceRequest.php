<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceRequest extends Model
{
    /**
     * @example ["95187"]
     *
     * @var string[]
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $instanceDescription;

    /**
     * @example 90515b5-6115-4ccf-83e2-52d5bfaf2ddf
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxConcurrentConversation;
    protected $_name = [
        'callingNumber'             => 'CallingNumber',
        'instanceDescription'       => 'InstanceDescription',
        'instanceId'                => 'InstanceId',
        'instanceName'              => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
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
