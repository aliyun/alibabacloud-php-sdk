<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\ModifyApplicationSpecRequest\instanceSpec;
use AlibabaCloud\Tea\Model;

class ModifyApplicationSpecRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 02S7UU41WKJL7ERR
     *
     * @var string
     */
    public $applicationId;

    /**
     * @var instanceSpec[]
     */
    public $instanceSpec;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceSpec' => 'InstanceSpec',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = [];
            if (null !== $this->instanceSpec && \is_array($this->instanceSpec)) {
                $n = 0;
                foreach ($this->instanceSpec as $item) {
                    $res['InstanceSpec'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApplicationSpecRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InstanceSpec'])) {
            if (!empty($map['InstanceSpec'])) {
                $model->instanceSpec = [];
                $n = 0;
                foreach ($map['InstanceSpec'] as $item) {
                    $model->instanceSpec[$n++] = null !== $item ? instanceSpec::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
