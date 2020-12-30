<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeFullBackupListResponseBody\items\fullBackupFile;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullBackupFile) {
            $res['FullBackupFile'] = [];
            if (null !== $this->fullBackupFile && \is_array($this->fullBackupFile)) {
                $n = 0;
                foreach ($this->fullBackupFile as $item) {
                    $res['FullBackupFile'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullBackupFile'])) {
            if (!empty($map['FullBackupFile'])) {
                $model->fullBackupFile = [];
                $n                     = 0;
                foreach ($map['FullBackupFile'] as $item) {
                    $model->fullBackupFile[$n++] = null !== $item ? fullBackupFile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
