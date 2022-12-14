<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSandboxBackupSetsRequest extends Model
{
    /**
     * @description The ID of the backup schedule. You can call the [DescribeBackupPlanList](~~437215~~) operation to obtain the ID of the backup schedule.
     *
     * >  If your instance is an ApsaraDB RDS for MySQL instance, you can configure [automatic access to the instance](~~193091~~) to automatically add the instance to DBS and obtain the ID of the backup schedule.
     * @example 1hxxxx8xxxxxa
     *
     * @var string
     */
    public $backupPlanId;

    /**
     * @description The ID of the backup set. If this parameter is specified, only the snapshot of the backup set is returned. If this parameter is not specified, all the snapshots of the backup schedule are returned.
     *
     * @example 1xxxx2xxxxx1e
     *
     * @var string
     */
    public $backupSetId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   30 (default value)
     *   50
     *   100
     *
     * @example 30
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'backupPlanId' => 'BackupPlanId',
        'backupSetId'  => 'BackupSetId',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupPlanId) {
            $res['BackupPlanId'] = $this->backupPlanId;
        }
        if (null !== $this->backupSetId) {
            $res['BackupSetId'] = $this->backupSetId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSandboxBackupSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupPlanId'])) {
            $model->backupPlanId = $map['BackupPlanId'];
        }
        if (isset($map['BackupSetId'])) {
            $model->backupSetId = $map['BackupSetId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
