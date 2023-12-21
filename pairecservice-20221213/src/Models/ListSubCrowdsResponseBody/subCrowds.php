<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponseBody;

use AlibabaCloud\Tea\Model;

class subCrowds extends Model
{
    /**
     * @example 2021-12-15T23:24:33.132+08:00
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2
     *
     * @var int
     */
    public $quantity;

    /**
     * @example ManualInput
     *
     * @var string
     */
    public $source;

    /**
     * @example 3
     *
     * @var string
     */
    public $subCrowdId;

    /**
     * @example user1,user2
     *
     * @var string
     */
    public $users;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'quantity'      => 'Quantity',
        'source'        => 'Source',
        'subCrowdId'    => 'SubCrowdId',
        'users'         => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->subCrowdId) {
            $res['SubCrowdId'] = $this->subCrowdId;
        }
        if (null !== $this->users) {
            $res['Users'] = $this->users;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subCrowds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SubCrowdId'])) {
            $model->subCrowdId = $map['SubCrowdId'];
        }
        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
