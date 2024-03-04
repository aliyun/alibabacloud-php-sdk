<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class ossConfig extends Model
{
    /**
     * @var string
     */
    public $accessKeyID;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'accessKeyID'     => 'accessKeyID',
        'accessKeySecret' => 'accessKeySecret',
        'endpoint'        => 'endpoint',
        'roleArn'         => 'role_arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyID) {
            $res['accessKeyID'] = $this->accessKeyID;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->roleArn) {
            $res['role_arn'] = $this->roleArn;
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
        if (isset($map['accessKeyID'])) {
            $model->accessKeyID = $map['accessKeyID'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['role_arn'])) {
            $model->roleArn = $map['role_arn'];
        }

        return $model;
    }
}
