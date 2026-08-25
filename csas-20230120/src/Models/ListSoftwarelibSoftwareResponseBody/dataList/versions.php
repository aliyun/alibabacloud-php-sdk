<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListSoftwarelibSoftwareResponseBody\dataList;

use AlibabaCloud\Dara\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $downloadTimes;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $publisherType;

    /**
     * @var string
     */
    public $softwareId;

    /**
     * @var string
     */
    public $softwarePkgName;

    /**
     * @var int
     */
    public $softwarePkgSize;

    /**
     * @var string
     */
    public $softwareUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'downloadTimes' => 'DownloadTimes',
        'md5' => 'Md5',
        'modifyTime' => 'ModifyTime',
        'os' => 'Os',
        'publisherType' => 'PublisherType',
        'softwareId' => 'SoftwareId',
        'softwarePkgName' => 'SoftwarePkgName',
        'softwarePkgSize' => 'SoftwarePkgSize',
        'softwareUrl' => 'SoftwareUrl',
        'status' => 'Status',
        'version' => 'Version',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->downloadTimes) {
            $res['DownloadTimes'] = $this->downloadTimes;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->publisherType) {
            $res['PublisherType'] = $this->publisherType;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }

        if (null !== $this->softwarePkgName) {
            $res['SoftwarePkgName'] = $this->softwarePkgName;
        }

        if (null !== $this->softwarePkgSize) {
            $res['SoftwarePkgSize'] = $this->softwarePkgSize;
        }

        if (null !== $this->softwareUrl) {
            $res['SoftwareUrl'] = $this->softwareUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DownloadTimes'])) {
            $model->downloadTimes = $map['DownloadTimes'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['PublisherType'])) {
            $model->publisherType = $map['PublisherType'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        if (isset($map['SoftwarePkgName'])) {
            $model->softwarePkgName = $map['SoftwarePkgName'];
        }

        if (isset($map['SoftwarePkgSize'])) {
            $model->softwarePkgSize = $map['SoftwarePkgSize'];
        }

        if (isset($map['SoftwareUrl'])) {
            $model->softwareUrl = $map['SoftwareUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
