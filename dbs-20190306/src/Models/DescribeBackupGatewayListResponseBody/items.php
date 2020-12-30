<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody;

use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody\items\backupGateway;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var backupGateway[]
     */
    public $backupGateway;
    protected $_name = [
        'backupGateway' => 'BackupGateway',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupGateway) {
            $res['BackupGateway'] = [];
            if (null !== $this->backupGateway && \is_array($this->backupGateway)) {
                $n = 0;
                foreach ($this->backupGateway as $item) {
                    $res['BackupGateway'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['BackupGateway'])) {
            if (!empty($map['BackupGateway'])) {
                $model->backupGateway = [];
                $n                    = 0;
                foreach ($map['BackupGateway'] as $item) {
                    $model->backupGateway[$n++] = null !== $item ? backupGateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
