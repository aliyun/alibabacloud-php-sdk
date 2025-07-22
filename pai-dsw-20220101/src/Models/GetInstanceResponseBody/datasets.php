<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class datasets extends Model
{
    /**
     * @description The dataset ID.
     *
     * @example d-vsqjvsjp4orp5l206u
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The dataset version.
     *
     * @example v1
     *
     * @var string
     */
    public $datasetVersion;

    /**
     * @description Indicates whether dynamic mounting is enabled. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $dynamic;

    /**
     * @description The read and write permissions. Valid values: RW and RO.
     *
     * @example RW
     *
     * @var string
     */
    public $mountAccess;

    /**
     * @description The mount path in the container.
     *
     * @example /mnt/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount type of the dataset (deprecated).
     *
     * @example FastReadWrite
     *
     * @var string
     */
    public $optionType;

    /**
     * @description The mount type of the dataset.
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
     * @description The dataset URI.
     *
     * @example oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'datasetId' => 'DatasetId',
        'datasetVersion' => 'DatasetVersion',
        'dynamic' => 'Dynamic',
        'mountAccess' => 'MountAccess',
        'mountPath' => 'MountPath',
        'optionType' => 'OptionType',
        'options' => 'Options',
        'uri' => 'Uri',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->datasetVersion) {
            $res['DatasetVersion'] = $this->datasetVersion;
        }
        if (null !== $this->dynamic) {
            $res['Dynamic'] = $this->dynamic;
        }
        if (null !== $this->mountAccess) {
            $res['MountAccess'] = $this->mountAccess;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->optionType) {
            $res['OptionType'] = $this->optionType;
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
     * @return datasets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DatasetVersion'])) {
            $model->datasetVersion = $map['DatasetVersion'];
        }
        if (isset($map['Dynamic'])) {
            $model->dynamic = $map['Dynamic'];
        }
        if (isset($map['MountAccess'])) {
            $model->mountAccess = $map['MountAccess'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['OptionType'])) {
            $model->optionType = $map['OptionType'];
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
