<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcEquityPledgeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 110108017579881_0002
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $pawnee;

    /**
     * @example 91440300746612636Q
     *
     * @var string
     */
    public $pawneeIdentifyNo;

    /**
     * @var string
     */
    public $pledgor;

    /**
     * @example 27.78
     *
     * @var string
     */
    public $pledgorAmount;

    /**
     * @example 91310104087946746N
     *
     * @var string
     */
    public $pledgorIdentifyNo;

    /**
     * @example 2015-01-14
     *
     * @var string
     */
    public $publicDate;

    /**
     * @example 2018-11-20
     *
     * @var string
     */
    public $regDate;

    /**
     * @var string
     */
    public $relatedComp;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'number'            => 'Number',
        'pawnee'            => 'Pawnee',
        'pawneeIdentifyNo'  => 'PawneeIdentifyNo',
        'pledgor'           => 'Pledgor',
        'pledgorAmount'     => 'PledgorAmount',
        'pledgorIdentifyNo' => 'PledgorIdentifyNo',
        'publicDate'        => 'PublicDate',
        'regDate'           => 'RegDate',
        'relatedComp'       => 'RelatedComp',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->pawnee) {
            $res['Pawnee'] = $this->pawnee;
        }
        if (null !== $this->pawneeIdentifyNo) {
            $res['PawneeIdentifyNo'] = $this->pawneeIdentifyNo;
        }
        if (null !== $this->pledgor) {
            $res['Pledgor'] = $this->pledgor;
        }
        if (null !== $this->pledgorAmount) {
            $res['PledgorAmount'] = $this->pledgorAmount;
        }
        if (null !== $this->pledgorIdentifyNo) {
            $res['PledgorIdentifyNo'] = $this->pledgorIdentifyNo;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
        }
        if (null !== $this->relatedComp) {
            $res['RelatedComp'] = $this->relatedComp;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Pawnee'])) {
            $model->pawnee = $map['Pawnee'];
        }
        if (isset($map['PawneeIdentifyNo'])) {
            $model->pawneeIdentifyNo = $map['PawneeIdentifyNo'];
        }
        if (isset($map['Pledgor'])) {
            $model->pledgor = $map['Pledgor'];
        }
        if (isset($map['PledgorAmount'])) {
            $model->pledgorAmount = $map['PledgorAmount'];
        }
        if (isset($map['PledgorIdentifyNo'])) {
            $model->pledgorIdentifyNo = $map['PledgorIdentifyNo'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }
        if (isset($map['RelatedComp'])) {
            $model->relatedComp = $map['RelatedComp'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
