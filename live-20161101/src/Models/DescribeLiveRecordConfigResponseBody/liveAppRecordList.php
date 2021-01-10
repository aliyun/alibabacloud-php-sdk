<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponseBody\liveAppRecordList\liveAppRecord;
use AlibabaCloud\Tea\Model;

class liveAppRecordList extends Model
{
    /**
     * @var liveAppRecord[]
     */
    public $liveAppRecord;
    protected $_name = [
        'liveAppRecord' => 'LiveAppRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveAppRecord) {
            $res['LiveAppRecord'] = [];
            if (null !== $this->liveAppRecord && \is_array($this->liveAppRecord)) {
                $n = 0;
                foreach ($this->liveAppRecord as $item) {
                    $res['LiveAppRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveAppRecordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveAppRecord'])) {
            if (!empty($map['LiveAppRecord'])) {
                $model->liveAppRecord = [];
                $n                    = 0;
                foreach ($map['LiveAppRecord'] as $item) {
                    $model->liveAppRecord[$n++] = null !== $item ? liveAppRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
