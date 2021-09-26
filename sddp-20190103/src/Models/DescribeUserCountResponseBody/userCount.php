<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserCountResponseBody;

use AlibabaCloud\Tea\Model;

class userCount extends Model
{
    /**
     * @var string
     */
    public $saleInstanceId;

    /**
     * @var bool
     */
    public $authed;

    /**
     * @var bool
     */
    public $buyed;

    /**
     * @var int
     */
    public $saleInstanceStatus;

    /**
     * @var int
     */
    public $warnAddCount;

    /**
     * @var int
     */
    public $warnTotalCount;

    /**
     * @var int
     */
    public $unAuthCount;

    /**
     * @var int
     */
    public $totalAuthCount;

    /**
     * @var int
     */
    public $authCount;
    protected $_name = [
        'saleInstanceId'     => 'SaleInstanceId',
        'authed'             => 'Authed',
        'buyed'              => 'Buyed',
        'saleInstanceStatus' => 'SaleInstanceStatus',
        'warnAddCount'       => 'WarnAddCount',
        'warnTotalCount'     => 'WarnTotalCount',
        'unAuthCount'        => 'UnAuthCount',
        'totalAuthCount'     => 'TotalAuthCount',
        'authCount'          => 'AuthCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saleInstanceId) {
            $res['SaleInstanceId'] = $this->saleInstanceId;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }
        if (null !== $this->buyed) {
            $res['Buyed'] = $this->buyed;
        }
        if (null !== $this->saleInstanceStatus) {
            $res['SaleInstanceStatus'] = $this->saleInstanceStatus;
        }
        if (null !== $this->warnAddCount) {
            $res['WarnAddCount'] = $this->warnAddCount;
        }
        if (null !== $this->warnTotalCount) {
            $res['WarnTotalCount'] = $this->warnTotalCount;
        }
        if (null !== $this->unAuthCount) {
            $res['UnAuthCount'] = $this->unAuthCount;
        }
        if (null !== $this->totalAuthCount) {
            $res['TotalAuthCount'] = $this->totalAuthCount;
        }
        if (null !== $this->authCount) {
            $res['AuthCount'] = $this->authCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaleInstanceId'])) {
            $model->saleInstanceId = $map['SaleInstanceId'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }
        if (isset($map['Buyed'])) {
            $model->buyed = $map['Buyed'];
        }
        if (isset($map['SaleInstanceStatus'])) {
            $model->saleInstanceStatus = $map['SaleInstanceStatus'];
        }
        if (isset($map['WarnAddCount'])) {
            $model->warnAddCount = $map['WarnAddCount'];
        }
        if (isset($map['WarnTotalCount'])) {
            $model->warnTotalCount = $map['WarnTotalCount'];
        }
        if (isset($map['UnAuthCount'])) {
            $model->unAuthCount = $map['UnAuthCount'];
        }
        if (isset($map['TotalAuthCount'])) {
            $model->totalAuthCount = $map['TotalAuthCount'];
        }
        if (isset($map['AuthCount'])) {
            $model->authCount = $map['AuthCount'];
        }

        return $model;
    }
}
