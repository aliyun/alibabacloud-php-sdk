<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class CreateAppOtaVersionRequest extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $arch;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $otaType;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @var string
     */
    public $releaseNoteJp;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotRegionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'appVersion'       => 'AppVersion',
        'arch'             => 'Arch',
        'channel'          => 'Channel',
        'clientType'       => 'ClientType',
        'creator'          => 'Creator',
        'downloadUrl'      => 'DownloadUrl',
        'md5'              => 'Md5',
        'os'               => 'Os',
        'osType'           => 'OsType',
        'otaType'          => 'OtaType',
        'project'          => 'Project',
        'releaseNote'      => 'ReleaseNote',
        'releaseNoteEn'    => 'ReleaseNoteEn',
        'releaseNoteJp'    => 'ReleaseNoteJp',
        'size'             => 'Size',
        'snapshotId'       => 'SnapshotId',
        'snapshotRegionId' => 'SnapshotRegionId',
        'status'           => 'Status',
        'versionType'      => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->arch) {
            $res['Arch'] = $this->arch;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->otaType) {
            $res['OtaType'] = $this->otaType;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->releaseNoteJp) {
            $res['ReleaseNoteJp'] = $this->releaseNoteJp;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotRegionId) {
            $res['SnapshotRegionId'] = $this->snapshotRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppOtaVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Arch'])) {
            $model->arch = $map['Arch'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['OtaType'])) {
            $model->otaType = $map['OtaType'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['ReleaseNoteJp'])) {
            $model->releaseNoteJp = $map['ReleaseNoteJp'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotRegionId'])) {
            $model->snapshotRegionId = $map['SnapshotRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }

        return $model;
    }
}
