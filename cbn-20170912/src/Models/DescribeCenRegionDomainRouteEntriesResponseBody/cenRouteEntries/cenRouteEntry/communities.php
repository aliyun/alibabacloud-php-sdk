<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->community)) {
            Model::validateArray($this->community);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->community) {
            if (\is_array($this->community)) {
                $res['Community'] = [];
                $n1               = 0;
                foreach ($this->community as $item1) {
                    $res['Community'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Community'])) {
            if (!empty($map['Community'])) {
                $model->community = [];
                $n1               = 0;
                foreach ($map['Community'] as $item1) {
                    $model->community[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
