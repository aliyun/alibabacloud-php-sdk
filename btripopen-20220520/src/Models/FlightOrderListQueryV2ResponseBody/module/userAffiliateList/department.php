<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList;

use AlibabaCloud\Tea\Model;

class department extends Model
{
    /**
     * @example alitrip
     *
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;
    protected $_name = [
        'departId'   => 'depart_id',
        'departName' => 'depart_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return department
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }

        return $model;
    }
}
