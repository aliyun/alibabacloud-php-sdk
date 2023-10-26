<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteEnvCustomJobRequest extends Model
{
    /**
     * @description Custom job name.
     *
     * @example job1
     *
     * @var string
     */
    public $customJobName;

    /**
     * @description Environment ID.
     *
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'customJobName' => 'CustomJobName',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customJobName) {
            $res['CustomJobName'] = $this->customJobName;
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
     * @return DeleteEnvCustomJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomJobName'])) {
            $model->customJobName = $map['CustomJobName'];
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
