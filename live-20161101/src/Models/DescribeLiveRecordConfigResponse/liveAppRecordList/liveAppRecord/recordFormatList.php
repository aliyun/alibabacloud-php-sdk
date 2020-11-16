<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse\liveAppRecordList\liveAppRecord;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveRecordConfigResponse\liveAppRecordList\liveAppRecord\recordFormatList\recordFormat;
use AlibabaCloud\Tea\Model;

class recordFormatList extends Model
{
    /**
     * @var recordFormat[]
     */
    public $recordFormat;
    protected $_name = [
        'recordFormat' => 'RecordFormat',
    ];

    public function validate()
    {
        Model::validateRequired('recordFormat', $this->recordFormat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordFormat) {
            $res['RecordFormat'] = [];
            if (null !== $this->recordFormat && \is_array($this->recordFormat)) {
                $n = 0;
                foreach ($this->recordFormat as $item) {
                    $res['RecordFormat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordFormatList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n                   = 0;
                foreach ($map['RecordFormat'] as $item) {
                    $model->recordFormat[$n++] = null !== $item ? recordFormat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
