<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\recordConfig;

use AlibabaCloud\Tea\Model;

class recordFormat extends Model
{
    /**
     * @var recordFormat\recordFormat[]
     */
    public $recordFormat;
    protected $_name = [
        'recordFormat' => 'RecordFormat',
    ];

    public function validate() {}

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
     * @return recordFormat
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordFormat'])) {
            if (!empty($map['RecordFormat'])) {
                $model->recordFormat = [];
                $n = 0;
                foreach ($map['RecordFormat'] as $item) {
                    $model->recordFormat[$n++] = null !== $item ? recordFormat\recordFormat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
