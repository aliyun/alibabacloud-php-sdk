<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnvCustomJobRequest extends Model
{
    /**
     * @description The name of the custom job.
     *
     * This parameter is required.
     * @example customJob1
     *
     * @var string
     */
    public $customJobName;

    /**
     * @description Specifies whether to return an encrypted YAML string.
     *
     * @example true
     *
     * @var bool
     */
    public $encryptYaml;

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
        'customJobName' => 'CustomJobName',
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
        if (null !== $this->customJobName) {
            $res['CustomJobName'] = $this->customJobName;
        }
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
     * @return DescribeEnvCustomJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomJobName'])) {
            $model->customJobName = $map['CustomJobName'];
        }
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
