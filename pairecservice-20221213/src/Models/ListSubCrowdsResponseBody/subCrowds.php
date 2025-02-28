<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListSubCrowdsResponseBody;

use AlibabaCloud\Dara\Model;

class subCrowds extends Model
{
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var int
     */
    public $quantity;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $subCrowdId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
