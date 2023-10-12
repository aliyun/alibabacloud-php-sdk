<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInstanceRequest\resourceInformation;
use AlibabaCloud\Tea\Model;

class UpdateResourceInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var resourceInformation[]
     */
    public $resourceInformation;

    /**
     * @var string
     */
    public $resourceInformationId;

    /**
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'resourceInformation'   => 'ResourceInformation',
        'resourceInformationId' => 'ResourceInformationId',
        'setupProjectId'        => 'SetupProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceInformation) {
            $res['ResourceInformation'] = [];
            if (null !== $this->resourceInformation && \is_array($this->resourceInformation)) {
                $n = 0;
                foreach ($this->resourceInformation as $item) {
                    $res['ResourceInformation'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceInformationId) {
            $res['ResourceInformationId'] = $this->resourceInformationId;
        }
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceInformation'])) {
            if (!empty($map['ResourceInformation'])) {
                $model->resourceInformation = [];
                $n                          = 0;
                foreach ($map['ResourceInformation'] as $item) {
                    $model->resourceInformation[$n++] = null !== $item ? resourceInformation::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceInformationId'])) {
            $model->resourceInformationId = $map['ResourceInformationId'];
        }
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
