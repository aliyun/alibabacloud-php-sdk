<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;

use AlibabaCloud\Dara\Model;

class dataSources extends Model
{
    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceVersion;

    /**
     * @var bool
     */
    public $enableCache;

    /**
     * @var string
     */
    public $mountAccess;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'dataSourceId' => 'DataSourceId',
        'dataSourceVersion' => 'DataSourceVersion',
        'enableCache' => 'EnableCache',
        'mountAccess' => 'MountAccess',
        'mountPath' => 'MountPath',
        'options' => 'Options',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }

        if (null !== $this->dataSourceVersion) {
            $res['DataSourceVersion'] = $this->dataSourceVersion;
        }

        if (null !== $this->enableCache) {
            $res['EnableCache'] = $this->enableCache;
        }

        if (null !== $this->mountAccess) {
            $res['MountAccess'] = $this->mountAccess;
        }

        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }

        if (isset($map['DataSourceVersion'])) {
            $model->dataSourceVersion = $map['DataSourceVersion'];
        }

        if (isset($map['EnableCache'])) {
            $model->enableCache = $map['EnableCache'];
        }

        if (isset($map['MountAccess'])) {
            $model->mountAccess = $map['MountAccess'];
        }

        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
