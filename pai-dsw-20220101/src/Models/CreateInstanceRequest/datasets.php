<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CreateInstanceRequest;

use AlibabaCloud\Tea\Model;

class datasets extends Model
{
    /**
     * @description The dataset ID. If the dataset is read-only, you cannot change the dataset permission from read-only to read and write by using MountAccess.
     *
     * You can call [ListDatasets](https://help.aliyun.com/document_detail/457222.html) to obtain the dataset ID. If you configure the dataset ID, you cannot configure the dataset URI.
     *
     * @example d-vsqjvsjp4orp5l206u
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The dataset version. You must also configure DatasetId. If you leave this parameter empty, the value v1 is used by default.
     *
     * @example v1
     *
     * @var string
     */
    public $datasetVersion;

    /**
     * @description Specifies whether to enable dynamic mounting. Default value: false.
     *
     *   Currently, only instances using general-purpose computing resources are supported.
     *   Currently, only OSS datasets are supported. The mounted datasets are read-only.
     *   The mount path of the dynamically mounted dataset must be a subpath of the root path. Example: /mnt/dynamic/data1/
     *   A dynamically mounted dataset must be after non-dynamic datasets.
     *
     * @example true
     *
     * @var bool
     */
    public $dynamic;

    /**
     * @description The read and write permissions of the dataset. If the dataset is read-only, it cannot be changed to read and write.
     *
     * @example RW
     *
     * @var string
     */
    public $mountAccess;

    /**
     * @description The mount path of the dataset.
     *
     * @example /mnt/data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The mount type. You cannot specify Options at the same time. This is deprecated, and you can use Options instead.
     *
     * @example ReadOnly
     *
     * @deprecated
     *
     * @var string
     */
    public $optionType;

    /**
     * @description The custom dataset mount options. Only OSS is supported. You cannot specify OptionType at the same time. For more information, see [DSW mount configurations](https://www.alibabacloud.com/help/en/pai/user-guide/read-and-write-dataset-data).
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
     * @description The URI of the storage service directory, which can be directly mounted. This parameter is mutually exclusive with DatasetId.
     *
     * URI formats of different types of storage:
     *
     *   OSS: oss://bucket-name.oss-cn-shanghai-internal.aliyuncs.com/data/path/
     *   NAS: nas://29\\*\\*d-b12\\*\\*\\*\\*446.cn-hangzhou.nas.aliyuncs.com/data/path/
     *   Extreme NAS: nas://29\\*\\*\\*\\*123-y\\*\\*r.cn-hangzhou.extreme.nas.aliyuncs.com/data/path/
     *   CPFS: cpfs://cpfs-213\\*\\*\\*\\*87.cn-wulanchabu/ptc-292\\*\\*\\*\\*\\*cbb/exp-290\\*\\*\\*\\*\\*\\*\\*\\*03e/data/path/
     *   Lingjun CPFS: bmcpfs://cpfs-290\\*\\*\\*\\*\\*\\*foflh-vpc-x\\*\\*\\*\\*8r.cn-wulanchabu.cpfs.aliyuncs.com/data/path/
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
