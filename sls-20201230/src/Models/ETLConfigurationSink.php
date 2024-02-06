<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ETLConfigurationSink extends Model
{
    /**
     * @deprecated
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @deprecated
     *
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
    public $logstore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'endpoint'        => 'endpoint',
        'logstore'        => 'logstore',
        'name'            => 'name',
        'project'         => 'project',
        'roleArn'         => 'roleArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->project) {
            $res['project'] = $this->project;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ETLConfigurationSink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['project'])) {
            $model->project = $map['project'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }

        return $model;
    }
}
