<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class dataSources extends Model
{
    /**
     * @description The data source ID.
     *
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
     * @var bool
     */
    public $enableCache;

    /**
     * @var string
     */
    public $mountAccess;

    /**
     * @description The path to which the job is mounted. By default, the mount path in the data source configuration is used. This parameter is optional.
     *
     * @example /root/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount attribute of the custom dataset. Set the value to OSS.
     *
     * @example {
     * "fs.oss.download.thread.concurrency": "10",
     * "fs.oss.upload.thread.concurrency": "10",
     * "fs.jindo.args": "-oattr_timeout=3 -oentry_timeout=0 -onegative_timeout=0 -oauto_cache -ono_symlink"
     * }
     *
     * @var string
     */
    public $options;

    /**
     * @description The data source path.
     *
     * @example oss://bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/
     *
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

    public function validate() {}

    public function toMap()
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
