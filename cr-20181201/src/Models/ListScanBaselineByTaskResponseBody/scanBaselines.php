<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListScanBaselineByTaskResponseBody;

use AlibabaCloud\Tea\Model;

class scanBaselines extends Model
{
    /**
     * @var string
     */
    public $baselineClassAlias;

    /**
     * @var string
     */
    public $baselineDetailAdvice;

    /**
     * @var string
     */
    public $baselineDetailDescription;

    /**
     * @example usr/local/www/project/environments/dev/common/config/paramsxxx
     *
     * @var string
     */
    public $baselineDetailPrompt;

    /**
     * @example 1
     *
     * @var int
     */
    public $baselineItemCount;

    /**
     * @var string
     */
    public $baselineNameAlias;

    /**
     * @example ak_leak
     *
     * @var string
     */
    public $baselineNameKey;

    /**
     * @example high
     *
     * @var string
     */
    public $baselineNameLevel;

    /**
     * @example 1695090008000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 2024-04-10 15:33:26
     *
     * @var int
     */
    public $firstScanTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $highRiskItemCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $lowRiskItemCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $middleRiskItemCount;

    /**
     * @example 2328fcaa-f28a-405d-a357-asdvfrew23
     *
     * @var string
     */
    public $scanTaskId;

    /**
     * @example 1684220824226
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'baselineClassAlias'        => 'BaselineClassAlias',
        'baselineDetailAdvice'      => 'BaselineDetailAdvice',
        'baselineDetailDescription' => 'BaselineDetailDescription',
        'baselineDetailPrompt'      => 'BaselineDetailPrompt',
        'baselineItemCount'         => 'BaselineItemCount',
        'baselineNameAlias'         => 'BaselineNameAlias',
        'baselineNameKey'           => 'BaselineNameKey',
        'baselineNameLevel'         => 'BaselineNameLevel',
        'createTime'                => 'CreateTime',
        'firstScanTime'             => 'FirstScanTime',
        'highRiskItemCount'         => 'HighRiskItemCount',
        'lowRiskItemCount'          => 'LowRiskItemCount',
        'middleRiskItemCount'       => 'MiddleRiskItemCount',
        'scanTaskId'                => 'ScanTaskId',
        'updateTime'                => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineClassAlias) {
            $res['BaselineClassAlias'] = $this->baselineClassAlias;
        }
        if (null !== $this->baselineDetailAdvice) {
            $res['BaselineDetailAdvice'] = $this->baselineDetailAdvice;
        }
        if (null !== $this->baselineDetailDescription) {
            $res['BaselineDetailDescription'] = $this->baselineDetailDescription;
        }
        if (null !== $this->baselineDetailPrompt) {
            $res['BaselineDetailPrompt'] = $this->baselineDetailPrompt;
        }
        if (null !== $this->baselineItemCount) {
            $res['BaselineItemCount'] = $this->baselineItemCount;
        }
        if (null !== $this->baselineNameAlias) {
            $res['BaselineNameAlias'] = $this->baselineNameAlias;
        }
        if (null !== $this->baselineNameKey) {
            $res['BaselineNameKey'] = $this->baselineNameKey;
        }
        if (null !== $this->baselineNameLevel) {
            $res['BaselineNameLevel'] = $this->baselineNameLevel;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->firstScanTime) {
            $res['FirstScanTime'] = $this->firstScanTime;
        }
        if (null !== $this->highRiskItemCount) {
            $res['HighRiskItemCount'] = $this->highRiskItemCount;
        }
        if (null !== $this->lowRiskItemCount) {
            $res['LowRiskItemCount'] = $this->lowRiskItemCount;
        }
        if (null !== $this->middleRiskItemCount) {
            $res['MiddleRiskItemCount'] = $this->middleRiskItemCount;
        }
        if (null !== $this->scanTaskId) {
            $res['ScanTaskId'] = $this->scanTaskId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scanBaselines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineClassAlias'])) {
            $model->baselineClassAlias = $map['BaselineClassAlias'];
        }
        if (isset($map['BaselineDetailAdvice'])) {
            $model->baselineDetailAdvice = $map['BaselineDetailAdvice'];
        }
        if (isset($map['BaselineDetailDescription'])) {
            $model->baselineDetailDescription = $map['BaselineDetailDescription'];
        }
        if (isset($map['BaselineDetailPrompt'])) {
            $model->baselineDetailPrompt = $map['BaselineDetailPrompt'];
        }
        if (isset($map['BaselineItemCount'])) {
            $model->baselineItemCount = $map['BaselineItemCount'];
        }
        if (isset($map['BaselineNameAlias'])) {
            $model->baselineNameAlias = $map['BaselineNameAlias'];
        }
        if (isset($map['BaselineNameKey'])) {
            $model->baselineNameKey = $map['BaselineNameKey'];
        }
        if (isset($map['BaselineNameLevel'])) {
            $model->baselineNameLevel = $map['BaselineNameLevel'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FirstScanTime'])) {
            $model->firstScanTime = $map['FirstScanTime'];
        }
        if (isset($map['HighRiskItemCount'])) {
            $model->highRiskItemCount = $map['HighRiskItemCount'];
        }
        if (isset($map['LowRiskItemCount'])) {
            $model->lowRiskItemCount = $map['LowRiskItemCount'];
        }
        if (isset($map['MiddleRiskItemCount'])) {
            $model->middleRiskItemCount = $map['MiddleRiskItemCount'];
        }
        if (isset($map['ScanTaskId'])) {
            $model->scanTaskId = $map['ScanTaskId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
