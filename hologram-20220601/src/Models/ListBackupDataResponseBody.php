<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponseBody\backupDataList;

class ListBackupDataResponseBody extends Model
{
    /**
     * @var backupDataList[]
     */
    public $backupDataList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupDataList' => 'BackupDataList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->backupDataList)) {
            Model::validateArray($this->backupDataList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backupDataList) {
            if (\is_array($this->backupDataList)) {
                $res['BackupDataList'] = [];
                $n1 = 0;
                foreach ($this->backupDataList as $item1) {
                    $res['BackupDataList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BackupDataList'])) {
            if (!empty($map['BackupDataList'])) {
                $model->backupDataList = [];
                $n1 = 0;
                foreach ($map['BackupDataList'] as $item1) {
                    $model->backupDataList[$n1] = backupDataList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
