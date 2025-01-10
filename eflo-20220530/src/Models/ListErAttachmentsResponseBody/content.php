<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListErAttachmentsResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListErAttachmentsResponseBody\content\data;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The list of Lingjun HUB network instances.
     *
     * @var data[]
     */
    public $data;

    /**
     * @description The total number of entries that are returned.
     *
     * @example 0
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'data'  => 'Data',
        'total' => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
