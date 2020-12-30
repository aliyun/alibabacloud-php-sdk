<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeBgpResSummaryResponseBody\fullNodesSummary;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $inUse;

    /**
     * @var string
     */
    public $bizName;

    /**
     * @var int
     */
    public $ddosStatus;

    /**
     * @var bool
     */
    public $isDisabled;

    /**
     * @var int
     */
    public $threshold;

    /**
     * @var string
     */
    public $esnBizId;
    protected $_name = [
        'type'       => 'Type',
        'bizId'      => 'BizId',
        'ip'         => 'Ip',
        'regionId'   => 'RegionId',
        'appName'    => 'AppName',
        'regionName' => 'RegionName',
        'groupId'    => 'GroupId',
        'appId'      => 'AppId',
        'inUse'      => 'InUse',
        'bizName'    => 'BizName',
        'ddosStatus' => 'DdosStatus',
        'isDisabled' => 'IsDisabled',
        'threshold'  => 'Threshold',
        'esnBizId'   => 'EsnBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->inUse) {
            $res['InUse'] = $this->inUse;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->isDisabled) {
            $res['IsDisabled'] = $this->isDisabled;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->esnBizId) {
            $res['EsnBizId'] = $this->esnBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['InUse'])) {
            $model->inUse = $map['InUse'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['IsDisabled'])) {
            $model->isDisabled = $map['IsDisabled'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['EsnBizId'])) {
            $model->esnBizId = $map['EsnBizId'];
        }

        return $model;
    }
}
