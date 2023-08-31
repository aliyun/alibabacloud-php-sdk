<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Tea\Model;

class GetVbrFlowTopNShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @example tr-attach-dnv870gmqzmb5u****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @example 1638239092000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example cen-ia8kw1zjv4hyal****
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 112.74.XX.XX
     *
     * @var string
     */
    public $cloudIp;

    /**
     * @example 443
     *
     * @var string
     */
    public $cloudPort;

    /**
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @example 1638239093000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1Tuple
     *
     * @var string
     */
    public $groupBy;

    /**
     * @example Bytes
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 122.112.XX.XX
     *
     * @var string
     */
    public $otherIp;

    /**
     * @example 40002
     *
     * @var string
     */
    public $otherPort;

    /**
     * @example 6
     *
     * @var string
     */
    public $protocol;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example desc
     *
     * @var string
     */
    public $sort;

    /**
     * @example 10
     *
     * @var int
     */
    public $topN;

    /**
     * @example false
     *
     * @var bool
     */
    public $useMultiAccount;

    /**
     * @example vbr-k1atj46citwuek42j****
     *
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'accountIdsShrink'      => 'AccountIds',
        'attachmentId'          => 'AttachmentId',
        'beginTime'             => 'BeginTime',
        'cenId'                 => 'CenId',
        'cloudIp'               => 'CloudIp',
        'cloudPort'             => 'CloudPort',
        'direction'             => 'Direction',
        'endTime'               => 'EndTime',
        'groupBy'               => 'GroupBy',
        'orderBy'               => 'OrderBy',
        'otherIp'               => 'OtherIp',
        'otherPort'             => 'OtherPort',
        'protocol'              => 'Protocol',
        'regionId'              => 'RegionId',
        'sort'                  => 'Sort',
        'topN'                  => 'TopN',
        'useMultiAccount'       => 'UseMultiAccount',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->cloudIp) {
            $res['CloudIp'] = $this->cloudIp;
        }
        if (null !== $this->cloudPort) {
            $res['CloudPort'] = $this->cloudPort;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->topN) {
            $res['TopN'] = $this->topN;
        }
        if (null !== $this->useMultiAccount) {
            $res['UseMultiAccount'] = $this->useMultiAccount;
        }
        if (null !== $this->virtualBorderRouterId) {
            $res['VirtualBorderRouterId'] = $this->virtualBorderRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVbrFlowTopNShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CloudIp'])) {
            $model->cloudIp = $map['CloudIp'];
        }
        if (isset($map['CloudPort'])) {
            $model->cloudPort = $map['CloudPort'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['TopN'])) {
            $model->topN = $map['TopN'];
        }
        if (isset($map['UseMultiAccount'])) {
            $model->useMultiAccount = $map['UseMultiAccount'];
        }
        if (isset($map['VirtualBorderRouterId'])) {
            $model->virtualBorderRouterId = $map['VirtualBorderRouterId'];
        }

        return $model;
    }
}
