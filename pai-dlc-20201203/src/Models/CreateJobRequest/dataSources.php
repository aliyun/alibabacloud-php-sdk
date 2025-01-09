<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @example d-cn9dl*******
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $dataSourceVersion;

    /**
     * @example /root/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $options;

    /**
     * @example oss://bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'dataSourceId'      => 'DataSourceId',
        'dataSourceVersion' => 'DataSourceVersion',
        'mountPath'         => 'MountPath',
        'options'           => 'Options',
        'uri'               => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceVersion) {
            $res['DataSourceVersion'] = $this->dataSourceVersion;
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

    /**
     * @param array $map
     *
     * @return dataSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceVersion'])) {
            $model->dataSourceVersion = $map['DataSourceVersion'];
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
