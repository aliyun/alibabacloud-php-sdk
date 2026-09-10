<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ListDataCheckColumnResultsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $actualThreshold;

    /**
     * @var int
     */
    public $checkResult;

    /**
     * @var string
     */
    public $checkRule;

    /**
     * @var string
     */
    public $dstAlias;

    /**
     * @var string
     */
    public $dstColumnName;

    /**
     * @var string
     */
    public $dstColumnType;

    /**
     * @var string
     */
    public $dstMetricColumn;

    /**
     * @var string
     */
    public $dstResult;

    /**
     * @var string
     */
    public $expectThreshold;

    /**
     * @var int
     */
    public $isConsistent;

    /**
     * @var string
     */
    public $srcAlias;

    /**
     * @var string
     */
    public $srcColumnName;

    /**
     * @var string
     */
    public $srcColumnType;

    /**
     * @var string
     */
    public $srcMetricColumn;

    /**
     * @var string
     */
    public $srcResult;

    /**
     * @var int
     */
    public $stepId;
    protected $_name = [
        'actualThreshold' => 'actualThreshold',
        'checkResult' => 'checkResult',
        'checkRule' => 'checkRule',
        'dstAlias' => 'dstAlias',
        'dstColumnName' => 'dstColumnName',
        'dstColumnType' => 'dstColumnType',
        'dstMetricColumn' => 'dstMetricColumn',
        'dstResult' => 'dstResult',
        'expectThreshold' => 'expectThreshold',
        'isConsistent' => 'isConsistent',
        'srcAlias' => 'srcAlias',
        'srcColumnName' => 'srcColumnName',
        'srcColumnType' => 'srcColumnType',
        'srcMetricColumn' => 'srcMetricColumn',
        'srcResult' => 'srcResult',
        'stepId' => 'stepId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualThreshold) {
            $res['actualThreshold'] = $this->actualThreshold;
        }

        if (null !== $this->checkResult) {
            $res['checkResult'] = $this->checkResult;
        }

        if (null !== $this->checkRule) {
            $res['checkRule'] = $this->checkRule;
        }

        if (null !== $this->dstAlias) {
            $res['dstAlias'] = $this->dstAlias;
        }

        if (null !== $this->dstColumnName) {
            $res['dstColumnName'] = $this->dstColumnName;
        }

        if (null !== $this->dstColumnType) {
            $res['dstColumnType'] = $this->dstColumnType;
        }

        if (null !== $this->dstMetricColumn) {
            $res['dstMetricColumn'] = $this->dstMetricColumn;
        }

        if (null !== $this->dstResult) {
            $res['dstResult'] = $this->dstResult;
        }

        if (null !== $this->expectThreshold) {
            $res['expectThreshold'] = $this->expectThreshold;
        }

        if (null !== $this->isConsistent) {
            $res['isConsistent'] = $this->isConsistent;
        }

        if (null !== $this->srcAlias) {
            $res['srcAlias'] = $this->srcAlias;
        }

        if (null !== $this->srcColumnName) {
            $res['srcColumnName'] = $this->srcColumnName;
        }

        if (null !== $this->srcColumnType) {
            $res['srcColumnType'] = $this->srcColumnType;
        }

        if (null !== $this->srcMetricColumn) {
            $res['srcMetricColumn'] = $this->srcMetricColumn;
        }

        if (null !== $this->srcResult) {
            $res['srcResult'] = $this->srcResult;
        }

        if (null !== $this->stepId) {
            $res['stepId'] = $this->stepId;
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
        if (isset($map['actualThreshold'])) {
            $model->actualThreshold = $map['actualThreshold'];
        }

        if (isset($map['checkResult'])) {
            $model->checkResult = $map['checkResult'];
        }

        if (isset($map['checkRule'])) {
            $model->checkRule = $map['checkRule'];
        }

        if (isset($map['dstAlias'])) {
            $model->dstAlias = $map['dstAlias'];
        }

        if (isset($map['dstColumnName'])) {
            $model->dstColumnName = $map['dstColumnName'];
        }

        if (isset($map['dstColumnType'])) {
            $model->dstColumnType = $map['dstColumnType'];
        }

        if (isset($map['dstMetricColumn'])) {
            $model->dstMetricColumn = $map['dstMetricColumn'];
        }

        if (isset($map['dstResult'])) {
            $model->dstResult = $map['dstResult'];
        }

        if (isset($map['expectThreshold'])) {
            $model->expectThreshold = $map['expectThreshold'];
        }

        if (isset($map['isConsistent'])) {
            $model->isConsistent = $map['isConsistent'];
        }

        if (isset($map['srcAlias'])) {
            $model->srcAlias = $map['srcAlias'];
        }

        if (isset($map['srcColumnName'])) {
            $model->srcColumnName = $map['srcColumnName'];
        }

        if (isset($map['srcColumnType'])) {
            $model->srcColumnType = $map['srcColumnType'];
        }

        if (isset($map['srcMetricColumn'])) {
            $model->srcMetricColumn = $map['srcMetricColumn'];
        }

        if (isset($map['srcResult'])) {
            $model->srcResult = $map['srcResult'];
        }

        if (isset($map['stepId'])) {
            $model->stepId = $map['stepId'];
        }

        return $model;
    }
}
