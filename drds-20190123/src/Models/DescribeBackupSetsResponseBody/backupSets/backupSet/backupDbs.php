<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet;

use AlibabaCloud\Tea\Model;

class backupDbs extends Model
{
    /**
     * @var string[]
     */
    public $backupDb;
    protected $_name = [
        'backupDb' => 'backupDb',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDb) {
            $res['backupDb'] = $this->backupDb;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupDbs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['backupDb'])) {
            if (!empty($map['backupDb'])) {
                $model->backupDb = $map['backupDb'];
            }
        }

        return $model;
    }
}
