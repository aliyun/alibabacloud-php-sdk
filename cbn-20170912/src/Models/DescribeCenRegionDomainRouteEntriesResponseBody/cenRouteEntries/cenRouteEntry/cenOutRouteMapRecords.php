<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords\cenOutRouteMapRecord;
use AlibabaCloud\Tea\Model;

class cenOutRouteMapRecords extends Model
{
    /**
     * @var cenOutRouteMapRecord[]
     */
    public $cenOutRouteMapRecord;
    protected $_name = [
        'cenOutRouteMapRecord' => 'CenOutRouteMapRecord',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cenOutRouteMapRecord) {
            $res['CenOutRouteMapRecord'] = [];
            if (null !== $this->cenOutRouteMapRecord && \is_array($this->cenOutRouteMapRecord)) {
                $n = 0;
                foreach ($this->cenOutRouteMapRecord as $item) {
                    $res['CenOutRouteMapRecord'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenOutRouteMapRecords
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CenOutRouteMapRecord'])) {
            if (!empty($map['CenOutRouteMapRecord'])) {
                $model->cenOutRouteMapRecord = [];
                $n                           = 0;
                foreach ($map['CenOutRouteMapRecord'] as $item) {
                    $model->cenOutRouteMapRecord[$n++] = null !== $item ? cenOutRouteMapRecord::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
