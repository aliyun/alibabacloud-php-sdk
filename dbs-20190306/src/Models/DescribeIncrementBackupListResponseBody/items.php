<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody\items\incrementBackupFile;

class items extends Model
{
    /**
     * @var incrementBackupFile[]
     */
    public $incrementBackupFile;
    protected $_name = [
        'incrementBackupFile' => 'IncrementBackupFile',
    ];

    public function validate()
    {
        if (\is_array($this->incrementBackupFile)) {
            Model::validateArray($this->incrementBackupFile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incrementBackupFile) {
            if (\is_array($this->incrementBackupFile)) {
                $res['IncrementBackupFile'] = [];
                $n1 = 0;
                foreach ($this->incrementBackupFile as $item1) {
                    $res['IncrementBackupFile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IncrementBackupFile'])) {
            if (!empty($map['IncrementBackupFile'])) {
                $model->incrementBackupFile = [];
                $n1 = 0;
                foreach ($map['IncrementBackupFile'] as $item1) {
                    $model->incrementBackupFile[$n1] = incrementBackupFile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
