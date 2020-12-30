<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody\allBackupGroups\backupGroups;
use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeFlexBackupGroupsResponseBody\allBackupGroups\sharedGroups;
use AlibabaCloud\Tea\Model;

class allBackupGroups extends Model
{
    /**
     * @var sharedGroups[]
     */
    public $sharedGroups;

    /**
     * @var backupGroups[]
     */
    public $backupGroups;
    protected $_name = [
        'sharedGroups' => 'SharedGroups',
        'backupGroups' => 'BackupGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sharedGroups) {
            $res['SharedGroups'] = [];
            if (null !== $this->sharedGroups && \is_array($this->sharedGroups)) {
                $n = 0;
                foreach ($this->sharedGroups as $item) {
                    $res['SharedGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->backupGroups) {
            $res['BackupGroups'] = [];
            if (null !== $this->backupGroups && \is_array($this->backupGroups)) {
                $n = 0;
                foreach ($this->backupGroups as $item) {
                    $res['BackupGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allBackupGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SharedGroups'])) {
            if (!empty($map['SharedGroups'])) {
                $model->sharedGroups = [];
                $n                   = 0;
                foreach ($map['SharedGroups'] as $item) {
                    $model->sharedGroups[$n++] = null !== $item ? sharedGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BackupGroups'])) {
            if (!empty($map['BackupGroups'])) {
                $model->backupGroups = [];
                $n                   = 0;
                foreach ($map['BackupGroups'] as $item) {
                    $model->backupGroups[$n++] = null !== $item ? backupGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
