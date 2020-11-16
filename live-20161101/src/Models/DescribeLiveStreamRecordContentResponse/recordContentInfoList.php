<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponse\recordContentInfoList\recordContentInfo;
use AlibabaCloud\Tea\Model;

class recordContentInfoList extends Model
{
    /**
     * @var recordContentInfo[]
     */
    public $recordContentInfo;
    protected $_name = [
        'recordContentInfo' => 'RecordContentInfo',
    ];

    public function validate()
    {
        Model::validateRequired('recordContentInfo', $this->recordContentInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordContentInfo) {
            $res['RecordContentInfo'] = [];
            if (null !== $this->recordContentInfo && \is_array($this->recordContentInfo)) {
                $n = 0;
                foreach ($this->recordContentInfo as $item) {
                    $res['RecordContentInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordContentInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordContentInfo'])) {
            if (!empty($map['RecordContentInfo'])) {
                $model->recordContentInfo = [];
                $n                        = 0;
                foreach ($map['RecordContentInfo'] as $item) {
                    $model->recordContentInfo[$n++] = null !== $item ? recordContentInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
