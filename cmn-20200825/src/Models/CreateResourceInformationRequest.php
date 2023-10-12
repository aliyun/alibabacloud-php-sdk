<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\CreateResourceInformationRequest\information;
use AlibabaCloud\Tea\Model;

class CreateResourceInformationRequest extends Model
{
    /**
     * @example architectureId
     *
     * @var string
     */
    public $architectureId;

    /**
     * @example clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 信息
     *
     * @var information[]
     */
    public $information;

    /**
     * @example instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 资源属性
     *
     * @example 6510
     *
     * @var string
     */
    public $resourceAttribute;

    /**
     * @description 资源类型
     *
     * @example CMDB
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'architectureId'    => 'ArchitectureId',
        'clientToken'       => 'ClientToken',
        'information'       => 'Information',
        'instanceId'        => 'InstanceId',
        'resourceAttribute' => 'ResourceAttribute',
        'resourceType'      => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureId) {
            $res['ArchitectureId'] = $this->architectureId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->information) {
            $res['Information'] = [];
            if (null !== $this->information && \is_array($this->information)) {
                $n = 0;
                foreach ($this->information as $item) {
                    $res['Information'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureId'])) {
            $model->architectureId = $map['ArchitectureId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Information'])) {
            if (!empty($map['Information'])) {
                $model->information = [];
                $n                  = 0;
                foreach ($map['Information'] as $item) {
                    $model->information[$n++] = null !== $item ? information::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
