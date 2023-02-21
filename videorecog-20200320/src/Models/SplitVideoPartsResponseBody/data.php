<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody;

use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data\elements;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data\splitVideoPartResults;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var splitVideoPartResults[]
     */
    public $splitVideoPartResults;
    protected $_name = [
        'elements'              => 'Elements',
        'splitVideoPartResults' => 'SplitVideoPartResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->splitVideoPartResults) {
            $res['SplitVideoPartResults'] = [];
            if (null !== $this->splitVideoPartResults && \is_array($this->splitVideoPartResults)) {
                $n = 0;
                foreach ($this->splitVideoPartResults as $item) {
                    $res['SplitVideoPartResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SplitVideoPartResults'])) {
            if (!empty($map['SplitVideoPartResults'])) {
                $model->splitVideoPartResults = [];
                $n                            = 0;
                foreach ($map['SplitVideoPartResults'] as $item) {
                    $model->splitVideoPartResults[$n++] = null !== $item ? splitVideoPartResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
