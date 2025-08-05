<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\otsDetail\tableNames;

class otsDetail extends Model
{
    /**
     * @var tableNames
     */
    public $tableNames;
    protected $_name = [
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
        if (null !== $this->tableNames) {
            $this->tableNames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableNames) {
            $res['TableNames'] = null !== $this->tableNames ? $this->tableNames->toArray($noStream) : $this->tableNames;
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
        if (isset($map['TableNames'])) {
            $model->tableNames = tableNames::fromMap($map['TableNames']);
        }

        return $model;
    }
}
