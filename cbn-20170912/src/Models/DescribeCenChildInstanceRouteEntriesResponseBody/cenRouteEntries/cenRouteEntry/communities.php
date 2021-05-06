<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Tea\Model;

class communities extends Model
{
    /**
     * @var string[]
     */
    public $community;
    protected $_name = [
        'community' => 'Community',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return communities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Community'])) {
            if (!empty($map['Community'])) {
                $model->community = $map['Community'];
            }
        }

        return $model;
    }
}
