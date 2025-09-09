<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->backupDb)) {
            Model::validateArray($this->backupDb);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDb) {
            if (\is_array($this->backupDb)) {
                $res['backupDb'] = [];
                $n1 = 0;
                foreach ($this->backupDb as $item1) {
                    $res['backupDb'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['backupDb'])) {
            if (!empty($map['backupDb'])) {
                $model->backupDb = [];
                $n1 = 0;
                foreach ($map['backupDb'] as $item1) {
                    $model->backupDb[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
