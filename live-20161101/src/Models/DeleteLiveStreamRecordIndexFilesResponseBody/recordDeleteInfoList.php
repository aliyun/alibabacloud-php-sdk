<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DeleteLiveStreamRecordIndexFilesResponseBody\recordDeleteInfoList\recordDeleteInfo;
use AlibabaCloud\Tea\Model;

class recordDeleteInfoList extends Model
{
    /**
     * @var recordDeleteInfo[]
     */
    public $recordDeleteInfo;
    protected $_name = [
        'recordDeleteInfo' => 'RecordDeleteInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordDeleteInfo) {
            $res['RecordDeleteInfo'] = [];
            if (null !== $this->recordDeleteInfo && \is_array($this->recordDeleteInfo)) {
                $n = 0;
                foreach ($this->recordDeleteInfo as $item) {
                    $res['RecordDeleteInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordDeleteInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordDeleteInfo'])) {
            if (!empty($map['RecordDeleteInfo'])) {
                $model->recordDeleteInfo = [];
                $n                       = 0;
                foreach ($map['RecordDeleteInfo'] as $item) {
                    $model->recordDeleteInfo[$n++] = null !== $item ? recordDeleteInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
