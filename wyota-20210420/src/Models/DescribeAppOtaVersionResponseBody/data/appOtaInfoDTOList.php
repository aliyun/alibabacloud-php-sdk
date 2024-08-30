<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeAppOtaVersionResponseBody\data;

use AlibabaCloud\Tea\Model;

class appOtaInfoDTOList extends Model
{
    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fullDownloadUrl;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $md5;

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
    public $protocolType;

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
    public $sessionType;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $versionCode;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var string
     */
    public $versionUid;
    protected $_name = [
        'appVersion'      => 'AppVersion',
        'channel'         => 'Channel',
        'downloadUrl'     => 'DownloadUrl',
        'fullDownloadUrl' => 'FullDownloadUrl',
        'gmtCreate'       => 'GmtCreate',
        'md5'             => 'Md5',
        'osType'          => 'OsType',
        'otaType'         => 'OtaType',
        'project'         => 'Project',
        'protocolType'    => 'ProtocolType',
        'releaseNote'     => 'ReleaseNote',
        'releaseNoteEn'   => 'ReleaseNoteEn',
        'sessionType'     => 'SessionType',
        'size'            => 'Size',
        'status'          => 'Status',
        'versionCode'     => 'VersionCode',
        'versionType'     => 'VersionType',
        'versionUid'      => 'VersionUid',
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
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fullDownloadUrl) {
            $res['FullDownloadUrl'] = $this->fullDownloadUrl;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
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
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->sessionType) {
            $res['SessionType'] = $this->sessionType;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->versionUid) {
            $res['VersionUid'] = $this->versionUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appOtaInfoDTOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FullDownloadUrl'])) {
            $model->fullDownloadUrl = $map['FullDownloadUrl'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
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
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['SessionType'])) {
            $model->sessionType = $map['SessionType'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['VersionUid'])) {
            $model->versionUid = $map['VersionUid'];
        }

        return $model;
    }
}
