<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListOsVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class osVersion extends Model
{
    /**
     * @example {"name":"xxx/yyy"}
     *
     * @var string
     */
    public $bootPatch;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $createTime;

    /**
     * @example {"name":"xxx/yyy"}
     *
     * @var string
     */
    public $featurePatch;

    /**
     * @description 文件名
     *
     * @example zzz
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 文件路径
     *
     * @example /xxx/zzz
     *
     * @var string
     */
    public $filePath;

    /**
     * @description 型号
     *
     * @example 6510
     *
     * @var string
     */
    public $model;

    /**
     * @description 系统版本
     *
     * @example 1.0
     *
     * @var string
     */
    public $osVersion;

    /**
     * @example xxx_yyy
     *
     * @var string
     */
    public $osVersionId;

    /**
     * @description 状态
     *
     * @example USED、UNUSED
     *
     * @var string
     */
    public $status;

    /**
     * @example {"name":"xxx/yyy"}
     *
     * @var string
     */
    public $systemPatch;

    /**
     * @example 2020-12-22 10:39:17
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 厂商
     *
     * @example Ruijie
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'bootPatch'    => 'BootPatch',
        'createTime'   => 'CreateTime',
        'featurePatch' => 'FeaturePatch',
        'fileName'     => 'FileName',
        'filePath'     => 'FilePath',
        'model'        => 'Model',
        'osVersion'    => 'OsVersion',
        'osVersionId'  => 'OsVersionId',
        'status'       => 'Status',
        'systemPatch'  => 'SystemPatch',
        'updateTime'   => 'UpdateTime',
        'vendor'       => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootPatch) {
            $res['BootPatch'] = $this->bootPatch;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->featurePatch) {
            $res['FeaturePatch'] = $this->featurePatch;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->osVersionId) {
            $res['OsVersionId'] = $this->osVersionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemPatch) {
            $res['SystemPatch'] = $this->systemPatch;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootPatch'])) {
            $model->bootPatch = $map['BootPatch'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FeaturePatch'])) {
            $model->featurePatch = $map['FeaturePatch'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['OsVersionId'])) {
            $model->osVersionId = $map['OsVersionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemPatch'])) {
            $model->systemPatch = $map['SystemPatch'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
