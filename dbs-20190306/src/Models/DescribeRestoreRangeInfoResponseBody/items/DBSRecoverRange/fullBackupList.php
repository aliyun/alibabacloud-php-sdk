<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRestoreRangeInfoResponseBody\items\DBSRecoverRange\fullBackupList\fullBackupDetail;

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
        if (\is_array($this->fullBackupDetail)) {
            Model::validateArray($this->fullBackupDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullBackupDetail) {
            if (\is_array($this->fullBackupDetail)) {
                $res['FullBackupDetail'] = [];
                $n1 = 0;
                foreach ($this->fullBackupDetail as $item1) {
                    $res['FullBackupDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FullBackupDetail'])) {
            if (!empty($map['FullBackupDetail'])) {
                $model->fullBackupDetail = [];
                $n1 = 0;
                foreach ($map['FullBackupDetail'] as $item1) {
                    $model->fullBackupDetail[$n1] = fullBackupDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
