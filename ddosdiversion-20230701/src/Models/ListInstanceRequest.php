<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Dara\Model;

class ListInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $name;

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

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'name' => 'Name',
        'num' => 'Num',
        'page' => 'Page',
        'saleId' => 'SaleId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
