<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration;

use AlibabaCloud\Tea\Model;

class ossConfig extends Model
{
    /**
     * @var string
     */
    public $ossAccessId;

    /**
     * @var string
     */
    public $ossAccessKey;

    /**
     * @example autofe-service
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @example oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string
     */
    public $ossRoleArn;
    protected $_name = [
        'ossAccessId'  => 'oss_access_id',
        'ossAccessKey' => 'oss_access_key',
        'ossBucket'    => 'oss_bucket',
        'ossEndpoint'  => 'oss_endpoint',
        'ossRoleArn'   => 'oss_role_arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossAccessId) {
            $res['oss_access_id'] = $this->ossAccessId;
        }
        if (null !== $this->ossAccessKey) {
            $res['oss_access_key'] = $this->ossAccessKey;
        }
        if (null !== $this->ossBucket) {
            $res['oss_bucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['oss_endpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossRoleArn) {
            $res['oss_role_arn'] = $this->ossRoleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['oss_access_id'])) {
            $model->ossAccessId = $map['oss_access_id'];
        }
        if (isset($map['oss_access_key'])) {
            $model->ossAccessKey = $map['oss_access_key'];
        }
        if (isset($map['oss_bucket'])) {
            $model->ossBucket = $map['oss_bucket'];
        }
        if (isset($map['oss_endpoint'])) {
            $model->ossEndpoint = $map['oss_endpoint'];
        }
        if (isset($map['oss_role_arn'])) {
            $model->ossRoleArn = $map['oss_role_arn'];
        }

        return $model;
    }
}
