<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange\fullBackupList\fullBackupDetail;
use AlibabaCloud\Tea\Model;

class fullBackupList extends Model
{
    /**
     * @var fullBackupDetail[]
     */
    public $fullBackupDetail;
    protected $_name = [
        'fullBackupDetail' => 'FullBackupDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullBackupDetail) {
            $res['FullBackupDetail'] = [];
            if (null !== $this->fullBackupDetail && \is_array($this->fullBackupDetail)) {
                $n = 0;
                foreach ($this->fullBackupDetail as $item) {
                    $res['FullBackupDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullBackupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FullBackupDetail'])) {
            if (!empty($map['FullBackupDetail'])) {
                $model->fullBackupDetail = [];
                $n                       = 0;
                foreach ($map['FullBackupDetail'] as $item) {
                    $model->fullBackupDetail[$n++] = null !== $item ? fullBackupDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
