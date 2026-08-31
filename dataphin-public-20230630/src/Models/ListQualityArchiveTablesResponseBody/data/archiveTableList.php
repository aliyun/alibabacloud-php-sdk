<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityArchiveTablesResponseBody\data;

use AlibabaCloud\Dara\Model;

class archiveTableList extends Model
{
    /**
     * @var int
     */
    public $archiveTableId;

    /**
     * @var string
     */
    public $archiveTableName;

    /**
     * @var string
     */
    public $ddl;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var int
     */
    public $lifecycle;

    /**
     * @var int
     */
    public $maxArchiveCount;
    protected $_name = [
        'archiveTableId' => 'ArchiveTableId',
        'archiveTableName' => 'ArchiveTableName',
        'ddl' => 'Ddl',
        'isDefault' => 'IsDefault',
        'lifecycle' => 'Lifecycle',
        'maxArchiveCount' => 'MaxArchiveCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveTableId) {
            $res['ArchiveTableId'] = $this->archiveTableId;
        }

        if (null !== $this->archiveTableName) {
            $res['ArchiveTableName'] = $this->archiveTableName;
        }

        if (null !== $this->ddl) {
            $res['Ddl'] = $this->ddl;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->lifecycle) {
            $res['Lifecycle'] = $this->lifecycle;
        }

        if (null !== $this->maxArchiveCount) {
            $res['MaxArchiveCount'] = $this->maxArchiveCount;
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
        if (isset($map['ArchiveTableId'])) {
            $model->archiveTableId = $map['ArchiveTableId'];
        }

        if (isset($map['ArchiveTableName'])) {
            $model->archiveTableName = $map['ArchiveTableName'];
        }

        if (isset($map['Ddl'])) {
            $model->ddl = $map['Ddl'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['Lifecycle'])) {
            $model->lifecycle = $map['Lifecycle'];
        }

        if (isset($map['MaxArchiveCount'])) {
            $model->maxArchiveCount = $map['MaxArchiveCount'];
        }

        return $model;
    }
}
