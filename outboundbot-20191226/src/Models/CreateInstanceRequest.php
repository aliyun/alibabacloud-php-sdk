<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
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
    public $instanceName;

    /**
     * @example 4
     *
     * @var int
     */
    public $maxConcurrentConversation;

    /**
     * @example Provided
     *
     * @var string
     */
    public $nluServiceType;

    /**
     * @example rg-acfmwd4qr3z773y
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'callingNumber'             => 'CallingNumber',
        'instanceDescription'       => 'InstanceDescription',
        'instanceName'              => 'InstanceName',
        'maxConcurrentConversation' => 'MaxConcurrentConversation',
        'nluServiceType'            => 'NluServiceType',
        'resourceGroupId'           => 'ResourceGroupId',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->maxConcurrentConversation) {
            $res['MaxConcurrentConversation'] = $this->maxConcurrentConversation;
        }
        if (null !== $this->nluServiceType) {
            $res['NluServiceType'] = $this->nluServiceType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['MaxConcurrentConversation'])) {
            $model->maxConcurrentConversation = $map['MaxConcurrentConversation'];
        }
        if (isset($map['NluServiceType'])) {
            $model->nluServiceType = $map['NluServiceType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
