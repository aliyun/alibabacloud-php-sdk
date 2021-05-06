<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;
use AlibabaCloud\Tea\Model;

class cenRouteEntries extends Model
{
    /**
     * @var cenRouteEntry[]
     */
    public $cenRouteEntry;
    protected $_name = [
        'cenRouteEntry' => 'CenRouteEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenRouteEntry) {
            $res['CenRouteEntry'] = [];
            if (null !== $this->cenRouteEntry && \is_array($this->cenRouteEntry)) {
                $n = 0;
                foreach ($this->cenRouteEntry as $item) {
                    $res['CenRouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenRouteEntry'])) {
            if (!empty($map['CenRouteEntry'])) {
                $model->cenRouteEntry = [];
                $n                    = 0;
                foreach ($map['CenRouteEntry'] as $item) {
                    $model->cenRouteEntry[$n++] = null !== $item ? cenRouteEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
