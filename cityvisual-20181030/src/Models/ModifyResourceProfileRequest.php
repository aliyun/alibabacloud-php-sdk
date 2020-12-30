<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyResourceProfileRequest\resourceProfileParams;
use AlibabaCloud\Tea\Model;

class ModifyResourceProfileRequest extends Model
{
    /**
     * @var string
     */
    public $resourceProfileName;

    /**
     * @var string
     */
    public $resourceProfileId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var resourceProfileParams[]
     */
    public $resourceProfileParams;
    protected $_name = [
        'resourceProfileName'   => 'ResourceProfileName',
        'resourceProfileId'     => 'ResourceProfileId',
        'regionId'              => 'RegionId',
        'instanceId'            => 'InstanceId',
        'resourceProfileParams' => 'ResourceProfileParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceProfileName) {
            $res['ResourceProfileName'] = $this->resourceProfileName;
        }
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceProfileParams) {
            $res['ResourceProfileParams'] = [];
            if (null !== $this->resourceProfileParams && \is_array($this->resourceProfileParams)) {
                $n = 0;
                foreach ($this->resourceProfileParams as $item) {
                    $res['ResourceProfileParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyResourceProfileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceProfileName'])) {
            $model->resourceProfileName = $map['ResourceProfileName'];
        }
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceProfileParams'])) {
            if (!empty($map['ResourceProfileParams'])) {
                $model->resourceProfileParams = [];
                $n                            = 0;
                foreach ($map['ResourceProfileParams'] as $item) {
                    $model->resourceProfileParams[$n++] = null !== $item ? resourceProfileParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
