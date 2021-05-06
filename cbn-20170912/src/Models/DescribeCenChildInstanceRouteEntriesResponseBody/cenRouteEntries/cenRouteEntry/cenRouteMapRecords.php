<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords\cenRouteMapRecord;
use AlibabaCloud\Tea\Model;

class cenRouteMapRecords extends Model
{
    /**
     * @var cenRouteMapRecord[]
     */
    public $cenRouteMapRecord;
    protected $_name = [
        'cenRouteMapRecord' => 'CenRouteMapRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenRouteMapRecord) {
            $res['CenRouteMapRecord'] = [];
            if (null !== $this->cenRouteMapRecord && \is_array($this->cenRouteMapRecord)) {
                $n = 0;
                foreach ($this->cenRouteMapRecord as $item) {
                    $res['CenRouteMapRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteMapRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenRouteMapRecord'])) {
            if (!empty($map['CenRouteMapRecord'])) {
                $model->cenRouteMapRecord = [];
                $n                        = 0;
                foreach ($map['CenRouteMapRecord'] as $item) {
                    $model->cenRouteMapRecord[$n++] = null !== $item ? cenRouteMapRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
