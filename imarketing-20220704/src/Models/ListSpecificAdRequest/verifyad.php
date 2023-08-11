<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest;

use AlibabaCloud\Tea\Model;

class verifyad extends Model
{
    /**
     * @description id
     *
     * @example 76403197902848
     *
     * @var string
     */
    public $id;

    /**
     * @example 242323
     *
     * @var string
     */
    public $itemid;

    /**
     * @example brandDispatch
     *
     * @var string
     */
    public $marketingtype;

    /**
     * @example 4534523
     *
     * @var string
     */
    public $seat;
    protected $_name = [
        'id'            => 'Id',
        'itemid'        => 'Itemid',
        'marketingtype' => 'Marketingtype',
        'seat'          => 'Seat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->itemid) {
            $res['Itemid'] = $this->itemid;
        }
        if (null !== $this->marketingtype) {
            $res['Marketingtype'] = $this->marketingtype;
        }
        if (null !== $this->seat) {
            $res['Seat'] = $this->seat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return verifyad
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Itemid'])) {
            $model->itemid = $map['Itemid'];
        }
        if (isset($map['Marketingtype'])) {
            $model->marketingtype = $map['Marketingtype'];
        }
        if (isset($map['Seat'])) {
            $model->seat = $map['Seat'];
        }

        return $model;
    }
}
