<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody\items\fullBackupFile;

class items extends Model
{
    /**
     * @var fullBackupFile[]
     */
    public $fullBackupFile;
    protected $_name = [
        'fullBackupFile' => 'FullBackupFile',
    ];

    public function validate()
    {
        if (\is_array($this->fullBackupFile)) {
            Model::validateArray($this->fullBackupFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullBackupFile) {
            if (\is_array($this->fullBackupFile)) {
                $res['FullBackupFile'] = [];
                $n1 = 0;
                foreach ($this->fullBackupFile as $item1) {
                    $res['FullBackupFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FullBackupFile'])) {
            if (!empty($map['FullBackupFile'])) {
                $model->fullBackupFile = [];
                $n1 = 0;
                foreach ($map['FullBackupFile'] as $item1) {
                    $model->fullBackupFile[$n1] = fullBackupFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
