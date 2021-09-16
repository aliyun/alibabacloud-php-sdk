<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDownloadLinkDetailsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDownloadLinkDetailsResponseBody\data\backupDownloadLinkByDB;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 备份下载链接详情
     *
     * @var backupDownloadLinkByDB[]
     */
    public $backupDownloadLinkByDB;

    /**
     * @var int
     */
    public $maxRecordsPerPage;

    /**
     * @var int
     */
    public $pageNumbers;

    /**
     * @var int
     */
    public $totalRecords;

    /**
     * @var string
     */
    public $backupStartTime;

    /**
     * @var string
     */
    public $backupEndTime;

    /**
     * @var string
     */
    public $backupType;

    /**
     * @var string
     */
    public $backupMethod;

    /**
     * @var string
     */
    public $backupStatus;

    /**
     * @var int
     */
    public $hostInstanceId;
    protected $_name = [
        'backupDownloadLinkByDB' => 'BackupDownloadLinkByDB',
        'maxRecordsPerPage'      => 'MaxRecordsPerPage',
        'pageNumbers'            => 'PageNumbers',
        'totalRecords'           => 'TotalRecords',
        'backupStartTime'        => 'BackupStartTime',
        'backupEndTime'          => 'BackupEndTime',
        'backupType'             => 'BackupType',
        'backupMethod'           => 'BackupMethod',
        'backupStatus'           => 'BackupStatus',
        'hostInstanceId'         => 'HostInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDownloadLinkByDB) {
            $res['BackupDownloadLinkByDB'] = [];
            if (null !== $this->backupDownloadLinkByDB && \is_array($this->backupDownloadLinkByDB)) {
                $n = 0;
                foreach ($this->backupDownloadLinkByDB as $item) {
                    $res['BackupDownloadLinkByDB'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxRecordsPerPage) {
            $res['MaxRecordsPerPage'] = $this->maxRecordsPerPage;
        }
        if (null !== $this->pageNumbers) {
            $res['PageNumbers'] = $this->pageNumbers;
        }
        if (null !== $this->totalRecords) {
            $res['TotalRecords'] = $this->totalRecords;
        }
        if (null !== $this->backupStartTime) {
            $res['BackupStartTime'] = $this->backupStartTime;
        }
        if (null !== $this->backupEndTime) {
            $res['BackupEndTime'] = $this->backupEndTime;
        }
        if (null !== $this->backupType) {
            $res['BackupType'] = $this->backupType;
        }
        if (null !== $this->backupMethod) {
            $res['BackupMethod'] = $this->backupMethod;
        }
        if (null !== $this->backupStatus) {
            $res['BackupStatus'] = $this->backupStatus;
        }
        if (null !== $this->hostInstanceId) {
            $res['HostInstanceId'] = $this->hostInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDownloadLinkByDB'])) {
            if (!empty($map['BackupDownloadLinkByDB'])) {
                $model->backupDownloadLinkByDB = [];
                $n                             = 0;
                foreach ($map['BackupDownloadLinkByDB'] as $item) {
                    $model->backupDownloadLinkByDB[$n++] = null !== $item ? backupDownloadLinkByDB::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxRecordsPerPage'])) {
            $model->maxRecordsPerPage = $map['MaxRecordsPerPage'];
        }
        if (isset($map['PageNumbers'])) {
            $model->pageNumbers = $map['PageNumbers'];
        }
        if (isset($map['TotalRecords'])) {
            $model->totalRecords = $map['TotalRecords'];
        }
        if (isset($map['BackupStartTime'])) {
            $model->backupStartTime = $map['BackupStartTime'];
        }
        if (isset($map['BackupEndTime'])) {
            $model->backupEndTime = $map['BackupEndTime'];
        }
        if (isset($map['BackupType'])) {
            $model->backupType = $map['BackupType'];
        }
        if (isset($map['BackupMethod'])) {
            $model->backupMethod = $map['BackupMethod'];
        }
        if (isset($map['BackupStatus'])) {
            $model->backupStatus = $map['BackupStatus'];
        }
        if (isset($map['HostInstanceId'])) {
            $model->hostInstanceId = $map['HostInstanceId'];
        }

        return $model;
    }
}
