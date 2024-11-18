<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\SDK\Hologram\V20220601\Models\ListBackupDataResponseBody\backupDataList;
use AlibabaCloud\Tea\Model;

class ListBackupDataResponseBody extends Model
{
    /**
     * @var backupDataList[]
     */
    public $backupDataList;

    /**
     * @example 4AA0C48F-B5BB-5FF9-A43B-6B91E0715D46
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backupDataList' => 'BackupDataList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupDataList) {
            $res['BackupDataList'] = [];
            if (null !== $this->backupDataList && \is_array($this->backupDataList)) {
                $n = 0;
                foreach ($this->backupDataList as $item) {
                    $res['BackupDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBackupDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupDataList'])) {
            if (!empty($map['BackupDataList'])) {
                $model->backupDataList = [];
                $n                     = 0;
                foreach ($map['BackupDataList'] as $item) {
                    $model->backupDataList[$n++] = null !== $item ? backupDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
