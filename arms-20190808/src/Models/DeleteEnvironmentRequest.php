<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnvironmentRequest extends Model
{
    /**
     * @description Specifies whether to delete the related Prometheus instance.
     *
     * @example true
     *
     * @var bool
     */
    public $deletePromInstance;

    /**
     * @description The ID of the environment instance.
     *
     * This parameter is required.
     * @example env-xxxxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'deletePromInstance' => 'DeletePromInstance',
        'environmentId'      => 'EnvironmentId',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletePromInstance) {
            $res['DeletePromInstance'] = $this->deletePromInstance;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEnvironmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeletePromInstance'])) {
            $model->deletePromInstance = $map['DeletePromInstance'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
