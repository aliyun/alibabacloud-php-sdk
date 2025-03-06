<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\otsDetail\tableNames;
use AlibabaCloud\Tea\Model;

class otsDetail extends Model
{
    /**
     * @description The names of the tables in the Tablestore instance.
     *
     * @var tableNames
     */
    public $tableNames;
    protected $_name = [
        'tableNames' => 'TableNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableNames) {
            $res['TableNames'] = null !== $this->tableNames ? $this->tableNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return otsDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableNames'])) {
            $model->tableNames = tableNames::fromMap($map['TableNames']);
        }

        return $model;
    }
}
