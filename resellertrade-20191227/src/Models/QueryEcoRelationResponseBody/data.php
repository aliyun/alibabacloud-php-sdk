<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationResponseBody;

use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationResponseBody\data\resellerProductModeDO;
use AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationResponseBody\data\resellerProductRuleDO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canLoginOfficial;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var bool
     */
    public $isTopReseller;

    /**
     * @var resellerProductModeDO
     */
    public $resellerProductModeDO;

    /**
     * @var resellerProductRuleDO
     */
    public $resellerProductRuleDO;

    /**
     * @var int
     */
    public $resellerUid;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $uid;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'canLoginOfficial'      => 'CanLoginOfficial',
        'endTime'               => 'EndTime',
        'isTopReseller'         => 'IsTopReseller',
        'resellerProductModeDO' => 'ResellerProductModeDO',
        'resellerProductRuleDO' => 'ResellerProductRuleDO',
        'resellerUid'           => 'ResellerUid',
        'startTime'             => 'StartTime',
        'status'                => 'Status',
        'uid'                   => 'Uid',
        'userType'              => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canLoginOfficial) {
            $res['CanLoginOfficial'] = $this->canLoginOfficial;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isTopReseller) {
            $res['IsTopReseller'] = $this->isTopReseller;
        }
        if (null !== $this->resellerProductModeDO) {
            $res['ResellerProductModeDO'] = null !== $this->resellerProductModeDO ? $this->resellerProductModeDO->toMap() : null;
        }
        if (null !== $this->resellerProductRuleDO) {
            $res['ResellerProductRuleDO'] = null !== $this->resellerProductRuleDO ? $this->resellerProductRuleDO->toMap() : null;
        }
        if (null !== $this->resellerUid) {
            $res['ResellerUid'] = $this->resellerUid;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['CanLoginOfficial'])) {
            $model->canLoginOfficial = $map['CanLoginOfficial'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IsTopReseller'])) {
            $model->isTopReseller = $map['IsTopReseller'];
        }
        if (isset($map['ResellerProductModeDO'])) {
            $model->resellerProductModeDO = resellerProductModeDO::fromMap($map['ResellerProductModeDO']);
        }
        if (isset($map['ResellerProductRuleDO'])) {
            $model->resellerProductRuleDO = resellerProductRuleDO::fromMap($map['ResellerProductRuleDO']);
        }
        if (isset($map['ResellerUid'])) {
            $model->resellerUid = $map['ResellerUid'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
