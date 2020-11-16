<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordIndexFilesResponse\recordIndexInfoList\recordIndexInfo;
use AlibabaCloud\Tea\Model;

class recordIndexInfoList extends Model
{
    /**
     * @var recordIndexInfo[]
     */
    public $recordIndexInfo;
    protected $_name = [
        'recordIndexInfo' => 'RecordIndexInfo',
    ];

    public function validate()
    {
        Model::validateRequired('recordIndexInfo', $this->recordIndexInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordIndexInfo) {
            $res['RecordIndexInfo'] = [];
            if (null !== $this->recordIndexInfo && \is_array($this->recordIndexInfo)) {
                $n = 0;
                foreach ($this->recordIndexInfo as $item) {
                    $res['RecordIndexInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordIndexInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordIndexInfo'])) {
            if (!empty($map['RecordIndexInfo'])) {
                $model->recordIndexInfo = [];
                $n                      = 0;
                foreach ($map['RecordIndexInfo'] as $item) {
                    $model->recordIndexInfo[$n++] = null !== $item ? recordIndexInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
