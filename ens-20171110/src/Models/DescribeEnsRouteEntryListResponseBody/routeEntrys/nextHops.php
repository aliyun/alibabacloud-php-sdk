<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRouteEntryListResponseBody\routeEntrys;

use AlibabaCloud\Dara\Model;

class nextHops extends Model
{
    /**
     * @var string
     */
    public $nextHopId;

    /**
     * @var string
     */
    public $nextHopName;

    /**
     * @var string
     */
    public $nextHopType;
    protected $_name = [
        'nextHopId' => 'NextHopId',
        'nextHopName' => 'NextHopName',
        'nextHopType' => 'NextHopType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextHopId) {
            $res['NextHopId'] = $this->nextHopId;
        }

        if (null !== $this->nextHopName) {
            $res['NextHopName'] = $this->nextHopName;
        }

        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
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
        if (isset($map['NextHopId'])) {
            $model->nextHopId = $map['NextHopId'];
        }

        if (isset($map['NextHopName'])) {
            $model->nextHopName = $map['NextHopName'];
        }

        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }

        return $model;
    }
}
