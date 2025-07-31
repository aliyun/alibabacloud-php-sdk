<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo\upStreamList\dependPeriod;
use AlibabaCloud\Tea\Model;

class upStreamList extends Model
{
    /**
     * @var dependPeriod
     */
    public $dependPeriod;

    /**
     * @example LAST
     *
     * @var string
     */
    public $dependStrategy;

    /**
     * @var string[]
     */
    public $fieldList;

    /**
     * @example PHYSICAL
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $periodDiff;

    /**
     * @var bool
     */
    public $sourceNodeEnabled;

    /**
     * @example n_2001
     *
     * @var string
     */
    public $sourceNodeId;

    /**
     * @example t_input1
     *
     * @var string
     */
    public $sourceNodeName;

    /**
     * @example t_input1
     *
     * @var string
     */
    public $sourceNodeOutputName;

    /**
     * @example 张三
     *
     * @var string
     */
    public $sourceNodeUserName;

    /**
     * @example t_input1
     *
     * @var string
     */
    public $sourceTableName;
    protected $_name = [
        'dependPeriod' => 'DependPeriod',
        'dependStrategy' => 'DependStrategy',
        'fieldList' => 'FieldList',
        'nodeType' => 'NodeType',
        'periodDiff' => 'PeriodDiff',
        'sourceNodeEnabled' => 'SourceNodeEnabled',
        'sourceNodeId' => 'SourceNodeId',
        'sourceNodeName' => 'SourceNodeName',
        'sourceNodeOutputName' => 'SourceNodeOutputName',
        'sourceNodeUserName' => 'SourceNodeUserName',
        'sourceTableName' => 'SourceTableName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dependPeriod) {
            $res['DependPeriod'] = null !== $this->dependPeriod ? $this->dependPeriod->toMap() : null;
        }
        if (null !== $this->dependStrategy) {
            $res['DependStrategy'] = $this->dependStrategy;
        }
        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->periodDiff) {
            $res['PeriodDiff'] = $this->periodDiff;
        }
        if (null !== $this->sourceNodeEnabled) {
            $res['SourceNodeEnabled'] = $this->sourceNodeEnabled;
        }
        if (null !== $this->sourceNodeId) {
            $res['SourceNodeId'] = $this->sourceNodeId;
        }
        if (null !== $this->sourceNodeName) {
            $res['SourceNodeName'] = $this->sourceNodeName;
        }
        if (null !== $this->sourceNodeOutputName) {
            $res['SourceNodeOutputName'] = $this->sourceNodeOutputName;
        }
        if (null !== $this->sourceNodeUserName) {
            $res['SourceNodeUserName'] = $this->sourceNodeUserName;
        }
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upStreamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DependPeriod'])) {
            $model->dependPeriod = dependPeriod::fromMap($map['DependPeriod']);
        }
        if (isset($map['DependStrategy'])) {
            $model->dependStrategy = $map['DependStrategy'];
        }
        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = $map['FieldList'];
            }
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['PeriodDiff'])) {
            $model->periodDiff = $map['PeriodDiff'];
        }
        if (isset($map['SourceNodeEnabled'])) {
            $model->sourceNodeEnabled = $map['SourceNodeEnabled'];
        }
        if (isset($map['SourceNodeId'])) {
            $model->sourceNodeId = $map['SourceNodeId'];
        }
        if (isset($map['SourceNodeName'])) {
            $model->sourceNodeName = $map['SourceNodeName'];
        }
        if (isset($map['SourceNodeOutputName'])) {
            $model->sourceNodeOutputName = $map['SourceNodeOutputName'];
        }
        if (isset($map['SourceNodeUserName'])) {
            $model->sourceNodeUserName = $map['SourceNodeUserName'];
        }
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        return $model;
    }
}
