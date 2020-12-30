<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeIncrementBackupListResponseBody\items\incrementBackupFile;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incrementBackupFile) {
            $res['IncrementBackupFile'] = [];
            if (null !== $this->incrementBackupFile && \is_array($this->incrementBackupFile)) {
                $n = 0;
                foreach ($this->incrementBackupFile as $item) {
                    $res['IncrementBackupFile'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['IncrementBackupFile'])) {
            if (!empty($map['IncrementBackupFile'])) {
                $model->incrementBackupFile = [];
                $n                          = 0;
                foreach ($map['IncrementBackupFile'] as $item) {
                    $model->incrementBackupFile[$n++] = null !== $item ? incrementBackupFile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
