<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ETLConfigurationSink extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $accessKeySecret;

    /**
     * @var string[]
     */
    public $datasets;

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
        'accessKeyId' => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'datasets' => 'datasets',
        'endpoint' => 'endpoint',
        'logstore' => 'logstore',
        'name' => 'name',
        'project' => 'project',
        'roleArn' => 'roleArn',
    ];

    public function validate()
    {
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['accessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->accessKeySecret) {
            $res['accessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['datasets'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }

        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }

        if (isset($map['datasets'])) {
            if (!empty($map['datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['datasets'] as $item1) {
                    $model->datasets[$n1] = $item1;
                    ++$n1;
                }
            }
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
