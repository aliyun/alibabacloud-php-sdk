<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @description The ID of the destination region where the cross-region log backup file is stored.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @description The external URL from which you can download the cross-region log backup file.
     *
     * @example http://rdsddrlog-zb.oss-cn-zhangjiakou.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $crossDownloadLink;

    /**
     * @description The internal URL from which you can download the cross-region log backup file.
     *
     * @example http://rdsddrlog-zb.oss-cn-zhangjiakou-internal.aliyuncs.com/xxxxx
     *
     * @var string
     */
    public $crossIntranetDownloadLink;

    /**
     * @description The ID of the cross-region log backup file.
     *
     * @example 14567
     *
     * @var int
     */
    public $crossLogBackupId;

    /**
     * @description The size of the cross-region log backup file. Unit: bytes.
     *
     * @example 5312836
     *
     * @var int
     */
    public $crossLogBackupSize;

    /**
     * @description The ID of the instance.
     *
     * @example 8161055
     *
     * @var int
     */
    public $instanceId;

    /**
     * @description The time when the download URL of the cross-region log backup file expires. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-06-30T15:00:00Z
     *
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @description The start time of the cross-region log backup file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-05-30T12:10:00Z
     *
     * @var string
     */
    public $logBeginTime;

    /**
     * @description The end time of the cross-region log backup file. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*hh:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-05-30T20:10:00Z
     *
     * @var string
     */
    public $logEndTime;

    /**
     * @description The name of the cross-region log backup file.
     *
     * @example cn-hangzhou_rm-bpxxxxx_7198739_mysql-bin.000230
     *
     * @var string
     */
    public $logFileName;
    protected $_name = [
        'crossBackupRegion'         => 'CrossBackupRegion',
        'crossDownloadLink'         => 'CrossDownloadLink',
        'crossIntranetDownloadLink' => 'CrossIntranetDownloadLink',
        'crossLogBackupId'          => 'CrossLogBackupId',
        'crossLogBackupSize'        => 'CrossLogBackupSize',
        'instanceId'                => 'InstanceId',
        'linkExpiredTime'           => 'LinkExpiredTime',
        'logBeginTime'              => 'LogBeginTime',
        'logEndTime'                => 'LogEndTime',
        'logFileName'               => 'LogFileName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossDownloadLink) {
            $res['CrossDownloadLink'] = $this->crossDownloadLink;
        }
        if (null !== $this->crossIntranetDownloadLink) {
            $res['CrossIntranetDownloadLink'] = $this->crossIntranetDownloadLink;
        }
        if (null !== $this->crossLogBackupId) {
            $res['CrossLogBackupId'] = $this->crossLogBackupId;
        }
        if (null !== $this->crossLogBackupSize) {
            $res['CrossLogBackupSize'] = $this->crossLogBackupSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossDownloadLink'])) {
            $model->crossDownloadLink = $map['CrossDownloadLink'];
        }
        if (isset($map['CrossIntranetDownloadLink'])) {
            $model->crossIntranetDownloadLink = $map['CrossIntranetDownloadLink'];
        }
        if (isset($map['CrossLogBackupId'])) {
            $model->crossLogBackupId = $map['CrossLogBackupId'];
        }
        if (isset($map['CrossLogBackupSize'])) {
            $model->crossLogBackupSize = $map['CrossLogBackupSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }

        return $model;
    }
}
