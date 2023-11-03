<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListEnvCustomJobsRequest extends Model
{
    /**
     * @description Specifies whether to return the encrypted YAML string.
     *
     * @example true
     *
     * @var bool
     */
    public $encryptYaml;

    /**
     * @description The ID of the environment instance.
     *
     * @example env-xxxxx
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
        'encryptYaml'   => 'EncryptYaml',
        'environmentId' => 'EnvironmentId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptYaml) {
            $res['EncryptYaml'] = $this->encryptYaml;
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
     * @return ListEnvCustomJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptYaml'])) {
            $model->encryptYaml = $map['EncryptYaml'];
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
