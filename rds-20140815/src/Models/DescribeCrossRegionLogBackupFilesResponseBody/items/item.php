<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var int
     */
    public $crossLogBackupId;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var int
     */
    public $crossLogBackupSize;

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
    public $crossDownloadLink;

    /**
     * @var string
     */
    public $crossIntranetDownloadLink;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $logFileName;

    /**
     * @var int
     */
    public $instanceId;
    protected $_name = [
        'crossLogBackupId'          => 'CrossLogBackupId',
        'crossBackupRegion'         => 'CrossBackupRegion',
        'crossLogBackupSize'        => 'CrossLogBackupSize',
        'logBeginTime'              => 'LogBeginTime',
        'logEndTime'                => 'LogEndTime',
        'crossDownloadLink'         => 'CrossDownloadLink',
        'crossIntranetDownloadLink' => 'CrossIntranetDownloadLink',
        'linkExpiredTime'           => 'LinkExpiredTime',
        'logFileName'               => 'LogFileName',
        'instanceId'                => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossLogBackupId) {
            $res['CrossLogBackupId'] = $this->crossLogBackupId;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossLogBackupSize) {
            $res['CrossLogBackupSize'] = $this->crossLogBackupSize;
        }
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
        }
        if (null !== $this->crossDownloadLink) {
            $res['CrossDownloadLink'] = $this->crossDownloadLink;
        }
        if (null !== $this->crossIntranetDownloadLink) {
            $res['CrossIntranetDownloadLink'] = $this->crossIntranetDownloadLink;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CrossLogBackupId'])) {
            $model->crossLogBackupId = $map['CrossLogBackupId'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossLogBackupSize'])) {
            $model->crossLogBackupSize = $map['CrossLogBackupSize'];
        }
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }
        if (isset($map['CrossDownloadLink'])) {
            $model->crossDownloadLink = $map['CrossDownloadLink'];
        }
        if (isset($map['CrossIntranetDownloadLink'])) {
            $model->crossIntranetDownloadLink = $map['CrossIntranetDownloadLink'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
