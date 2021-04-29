<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossRegionLogBackupFilesResponseBody\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var string
     */
    public $logBeginTime;

    /**
     * @var string
     */
    public $linkExpiredTime;

    /**
     * @var string
     */
    public $crossIntranetDownloadLink;

    /**
     * @var string
     */
    public $logFileName;

    /**
     * @var string
     */
    public $crossBackupRegion;

    /**
     * @var string
     */
    public $crossDownloadLink;

    /**
     * @var int
     */
    public $crossLogBackupSize;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $crossLogBackupId;

    /**
     * @var string
     */
    public $logEndTime;
    protected $_name = [
        'logBeginTime'              => 'LogBeginTime',
        'linkExpiredTime'           => 'LinkExpiredTime',
        'crossIntranetDownloadLink' => 'CrossIntranetDownloadLink',
        'logFileName'               => 'LogFileName',
        'crossBackupRegion'         => 'CrossBackupRegion',
        'crossDownloadLink'         => 'CrossDownloadLink',
        'crossLogBackupSize'        => 'CrossLogBackupSize',
        'instanceId'                => 'InstanceId',
        'crossLogBackupId'          => 'CrossLogBackupId',
        'logEndTime'                => 'LogEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logBeginTime) {
            $res['LogBeginTime'] = $this->logBeginTime;
        }
        if (null !== $this->linkExpiredTime) {
            $res['LinkExpiredTime'] = $this->linkExpiredTime;
        }
        if (null !== $this->crossIntranetDownloadLink) {
            $res['CrossIntranetDownloadLink'] = $this->crossIntranetDownloadLink;
        }
        if (null !== $this->logFileName) {
            $res['LogFileName'] = $this->logFileName;
        }
        if (null !== $this->crossBackupRegion) {
            $res['CrossBackupRegion'] = $this->crossBackupRegion;
        }
        if (null !== $this->crossDownloadLink) {
            $res['CrossDownloadLink'] = $this->crossDownloadLink;
        }
        if (null !== $this->crossLogBackupSize) {
            $res['CrossLogBackupSize'] = $this->crossLogBackupSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->crossLogBackupId) {
            $res['CrossLogBackupId'] = $this->crossLogBackupId;
        }
        if (null !== $this->logEndTime) {
            $res['LogEndTime'] = $this->logEndTime;
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
        if (isset($map['LogBeginTime'])) {
            $model->logBeginTime = $map['LogBeginTime'];
        }
        if (isset($map['LinkExpiredTime'])) {
            $model->linkExpiredTime = $map['LinkExpiredTime'];
        }
        if (isset($map['CrossIntranetDownloadLink'])) {
            $model->crossIntranetDownloadLink = $map['CrossIntranetDownloadLink'];
        }
        if (isset($map['LogFileName'])) {
            $model->logFileName = $map['LogFileName'];
        }
        if (isset($map['CrossBackupRegion'])) {
            $model->crossBackupRegion = $map['CrossBackupRegion'];
        }
        if (isset($map['CrossDownloadLink'])) {
            $model->crossDownloadLink = $map['CrossDownloadLink'];
        }
        if (isset($map['CrossLogBackupSize'])) {
            $model->crossLogBackupSize = $map['CrossLogBackupSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CrossLogBackupId'])) {
            $model->crossLogBackupId = $map['CrossLogBackupId'];
        }
        if (isset($map['LogEndTime'])) {
            $model->logEndTime = $map['LogEndTime'];
        }

        return $model;
    }
}
