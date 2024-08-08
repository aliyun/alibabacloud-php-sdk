<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models\MemberAccountDetailPageQueryRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $accountType;

    /**
     * @example 2011-09-02 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 750cff00c3e0996d220ac2861dafdfadsf
     *
     * @var string
     */
    public $openMerchantId;

    /**
     * @description This parameter is required.
     *
     * @example WMS_36606164948078_23218019
     *
     * @var string
     */
    public $outerMemberId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $platFormType;

    /**
     * @example 2011-09-01 00:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accountType'    => 'AccountType',
        'endTime'        => 'EndTime',
        'openMerchantId' => 'OpenMerchantId',
        'outerMemberId'  => 'OuterMemberId',
        'page'           => 'Page',
        'pageSize'       => 'PageSize',
        'platFormType'   => 'PlatFormType',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->openMerchantId) {
            $res['OpenMerchantId'] = $this->openMerchantId;
        }
        if (null !== $this->outerMemberId) {
            $res['OuterMemberId'] = $this->outerMemberId;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->platFormType) {
            $res['PlatFormType'] = $this->platFormType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OpenMerchantId'])) {
            $model->openMerchantId = $map['OpenMerchantId'];
        }
        if (isset($map['OuterMemberId'])) {
            $model->outerMemberId = $map['OuterMemberId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlatFormType'])) {
            $model->platFormType = $map['PlatFormType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
