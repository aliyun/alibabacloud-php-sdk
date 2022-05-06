<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var string
     */
    public $crossDownloadLink;

    /**
     * @var string
     */
    public $crossIntranetDownloadLink;

    /**
     * @var int
     */
    public $crossLogBackupId;

    /**
     * @var int
     */
    public $crossLogBackupSize;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $logBeginTime;

    /**
     * @var string
     */
    public $logEndTime;

    /**
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
