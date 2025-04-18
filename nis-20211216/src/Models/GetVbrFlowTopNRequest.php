<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\Dara\Model;

class GetVbrFlowTopNRequest extends Model
{
    /**
     * @var int[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $attachmentId;

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
    public $cloudIp;

    /**
     * @var string
     */
    public $cloudPort;

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
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var int
     */
    public $topN;

    /**
     * @var bool
     */
    public $useMultiAccount;

    /**
     * @var string
     */
    public $virtualBorderRouterId;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'attachmentId' => 'AttachmentId',
        'beginTime' => 'BeginTime',
        'cenId' => 'CenId',
        'cloudIp' => 'CloudIp',
        'cloudPort' => 'CloudPort',
        'direction' => 'Direction',
        'endTime' => 'EndTime',
        'groupBy' => 'GroupBy',
        'orderBy' => 'OrderBy',
        'otherIp' => 'OtherIp',
        'otherPort' => 'OtherPort',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'sort' => 'Sort',
        'topN' => 'TopN',
        'useMultiAccount' => 'UseMultiAccount',
        'virtualBorderRouterId' => 'VirtualBorderRouterId',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1++] = $item1;
                }
            }
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
