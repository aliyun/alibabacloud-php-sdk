<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class GetTransitRouterFlowTopNShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @var string
     */
    public $bandwithPackageId;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $groupBy;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $otherIp;

    /**
     * @var string
     */
    public $otherPort;

    /**
     * @var string
     */
    public $otherRegion;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $thisIp;

    /**
     * @var string
     */
    public $thisPort;

    /**
     * @var string
     */
    public $thisRegion;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var bool
     */
    public $useMultiAccount;
    protected $_name = [
        'accountIdsShrink' => 'AccountIds',
        'bandwithPackageId' => 'BandwithPackageId',
        'beginTime' => 'BeginTime',
        'cenId' => 'CenId',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'groupBy' => 'GroupBy',
        'orderBy' => 'OrderBy',
        'otherIp' => 'OtherIp',
        'otherPort' => 'OtherPort',
        'otherRegion' => 'OtherRegion',
        'protocol' => 'Protocol',
        'sort' => 'Sort',
        'thisIp' => 'ThisIp',
        'thisPort' => 'ThisPort',
        'thisRegion' => 'ThisRegion',
        'topN' => 'TopN',
        'useMultiAccount' => 'UseMultiAccount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }

        if (null !== $this->bandwithPackageId) {
            $res['BandwithPackageId'] = $this->bandwithPackageId;
        }

        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }

        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->groupBy) {
            $res['GroupBy'] = $this->groupBy;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->otherIp) {
            $res['OtherIp'] = $this->otherIp;
        }

        if (null !== $this->otherPort) {
            $res['OtherPort'] = $this->otherPort;
        }

        if (null !== $this->otherRegion) {
            $res['OtherRegion'] = $this->otherRegion;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->thisIp) {
            $res['ThisIp'] = $this->thisIp;
        }

        if (null !== $this->thisPort) {
            $res['ThisPort'] = $this->thisPort;
        }

        if (null !== $this->thisRegion) {
            $res['ThisRegion'] = $this->thisRegion;
        }

        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }

        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
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
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }

        if (isset($map['BandwithPackageId'])) {
            $model->bandwithPackageId = $map['BandwithPackageId'];
        }

        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }

        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['GroupBy'])) {
            $model->groupBy = $map['GroupBy'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['OtherIp'])) {
            $model->otherIp = $map['OtherIp'];
        }

        if (isset($map['OtherPort'])) {
            $model->otherPort = $map['OtherPort'];
        }

        if (isset($map['OtherRegion'])) {
            $model->otherRegion = $map['OtherRegion'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['ThisIp'])) {
            $model->thisIp = $map['ThisIp'];
        }

        if (isset($map['ThisPort'])) {
            $model->thisPort = $map['ThisPort'];
        }

        if (isset($map['ThisRegion'])) {
            $model->thisRegion = $map['ThisRegion'];
        }

        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }

        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }

        return $model;
    }
}
