<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeDnatEntriesResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeDnatEntriesResponseBody\uisDnatEntries\uisDnatEntry;
use AlibabaCloud\Tea\Model;

class uisDnatEntries extends Model
{
    /**
     * @var uisDnatEntry[]
     */
    public $uisDnatEntry;
    protected $_name = [
        'uisDnatEntry' => 'UisDnatEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uisDnatEntry) {
            $res['UisDnatEntry'] = [];
            if (null !== $this->uisDnatEntry && \is_array($this->uisDnatEntry)) {
                $n = 0;
                foreach ($this->uisDnatEntry as $item) {
                    $res['UisDnatEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return uisDnatEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UisDnatEntry'])) {
            if (!empty($map['UisDnatEntry'])) {
                $model->uisDnatEntry = [];
                $n                   = 0;
                foreach ($map['UisDnatEntry'] as $item) {
                    $model->uisDnatEntry[$n++] = null !== $item ? uisDnatEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
