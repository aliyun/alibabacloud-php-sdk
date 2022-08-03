<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountRecordsForParentResponseBody;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\ListAccountRecordsForParentResponseBody\records\record;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var record[]
     */
    public $record;
    protected $_name = [
        'record' => 'Record',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->record) {
            $res['Record'] = [];
            if (null !== $this->record && \is_array($this->record)) {
                $n = 0;
                foreach ($this->record as $item) {
                    $res['Record'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Record'])) {
            if (!empty($map['Record'])) {
                $model->record = [];
                $n             = 0;
                foreach ($map['Record'] as $item) {
                    $model->record[$n++] = null !== $item ? record::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
