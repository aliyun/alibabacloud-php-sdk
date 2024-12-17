<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOrderListQueryV2ResponseBody\module\userAffiliateList;

use AlibabaCloud\Tea\Model;

class costCenter extends Model
{
    /**
     * @example alitrip
     *
     * @var string
     */
    public $corpId;

    /**
     * @example alitripTest
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example test_cost_center
     *
     * @var string
     */
    public $number;
    protected $_name = [
        'corpId' => 'corp_id',
        'id'     => 'id',
        'name'   => 'name',
        'number' => 'number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costCenter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }

        return $model;
    }
}
