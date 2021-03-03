<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var callDetailRecord[]
     */
    public $callDetailRecord;
    protected $_name = [
        'callDetailRecord' => 'CallDetailRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDetailRecord) {
            $res['CallDetailRecord'] = [];
            if (null !== $this->callDetailRecord && \is_array($this->callDetailRecord)) {
                $n = 0;
                foreach ($this->callDetailRecord as $item) {
                    $res['CallDetailRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDetailRecord'])) {
            if (!empty($map['CallDetailRecord'])) {
                $model->callDetailRecord = [];
                $n                       = 0;
                foreach ($map['CallDetailRecord'] as $item) {
                    $model->callDetailRecord[$n++] = null !== $item ? callDetailRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
