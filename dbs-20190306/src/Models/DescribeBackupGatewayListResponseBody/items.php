<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeBackupGatewayListResponseBody\items\backupGateway;

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
        if (\is_array($this->backupGateway)) {
            Model::validateArray($this->backupGateway);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupGateway) {
            if (\is_array($this->backupGateway)) {
                $res['BackupGateway'] = [];
                $n1 = 0;
                foreach ($this->backupGateway as $item1) {
                    $res['BackupGateway'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BackupGateway'])) {
            if (!empty($map['BackupGateway'])) {
                $model->backupGateway = [];
                $n1 = 0;
                foreach ($map['BackupGateway'] as $item1) {
                    $model->backupGateway[$n1] = backupGateway::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
