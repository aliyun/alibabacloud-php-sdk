<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\otsDetail;

use AlibabaCloud\Dara\Model;

class tableNames extends Model
{
    /**
     * @var string[]
     */
    public $tableName;
    protected $_name = [
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->tableName)) {
            Model::validateArray($this->tableName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tableName) {
            if (\is_array($this->tableName)) {
                $res['TableName'] = [];
                $n1               = 0;
                foreach ($this->tableName as $item1) {
                    $res['TableName'][$n1++] = $item1;
                }
            }
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
        if (isset($map['TableName'])) {
            if (!empty($map['TableName'])) {
                $model->tableName = [];
                $n1               = 0;
                foreach ($map['TableName'] as $item1) {
                    $model->tableName[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
