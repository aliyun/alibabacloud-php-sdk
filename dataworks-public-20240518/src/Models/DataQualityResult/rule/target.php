<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\rule;

use AlibabaCloud\Dara\Model;

class target extends Model
{
    /**
     * @var string
     */
    public $databaseType;

    /**
     * @var string
     */
    public $partitionSpec;

    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'databaseType' => 'DatabaseType',
        'partitionSpec' => 'PartitionSpec',
        'tableGuid' => 'TableGuid',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }

        if (null !== $this->partitionSpec) {
            $res['PartitionSpec'] = $this->partitionSpec;
        }

        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }

        if (isset($map['PartitionSpec'])) {
            $model->partitionSpec = $map['PartitionSpec'];
        }

        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
