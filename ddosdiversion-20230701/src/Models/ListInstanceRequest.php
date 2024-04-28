<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceRequest extends Model
{
    /**
     * @description The name of the instance.
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries per page. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $num;

    /**
     * @description The page number. Default value: 1
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The ID of the anti-DDoS diversion instance.
     *
     * @example ddos_diversion_public_cn-xxxxxxxxxxxxx
     *
     * @var string
     */
    public $saleId;

    /**
     * @description The status of the instance. Valid values:
     *
     *   normal
     *   expired
     *   deleting
     *   stopped
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'name'   => 'Name',
        'num'    => 'Num',
        'page'   => 'Page',
        'saleId' => 'SaleId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListInstanceRequest
     */
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
