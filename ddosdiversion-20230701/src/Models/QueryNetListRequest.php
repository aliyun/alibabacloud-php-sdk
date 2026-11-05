<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Dara\Model;

class QueryNetListRequest extends Model
{
    /**
     * @var string
     */
    public $mainNet;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $net;

    /**
     * @var int
     */
    public $num;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $saleId;
    protected $_name = [
        'mainNet' => 'MainNet',
        'mode' => 'Mode',
        'net' => 'Net',
        'num' => 'Num',
        'page' => 'Page',
        'saleId' => 'SaleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mainNet) {
            $res['MainNet'] = $this->mainNet;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
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
        if (isset($map['MainNet'])) {
            $model->mainNet = $map['MainNet'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        return $model;
    }
}
