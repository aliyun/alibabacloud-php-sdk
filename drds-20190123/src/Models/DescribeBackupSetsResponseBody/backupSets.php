<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupSetsResponseBody\backupSets\backupSet;

class backupSets extends Model
{
    /**
     * @var backupSet[]
     */
    public $backupSet;
    protected $_name = [
        'backupSet' => 'backupSet',
    ];

    public function validate()
    {
        if (\is_array($this->backupSet)) {
            Model::validateArray($this->backupSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupSet) {
            if (\is_array($this->backupSet)) {
                $res['backupSet'] = [];
                $n1 = 0;
                foreach ($this->backupSet as $item1) {
                    $res['backupSet'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['backupSet'])) {
            if (!empty($map['backupSet'])) {
                $model->backupSet = [];
                $n1 = 0;
                foreach ($map['backupSet'] as $item1) {
                    $model->backupSet[$n1] = backupSet::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
