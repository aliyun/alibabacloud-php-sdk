<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateBatchTaskRequest\updateCommand\upStreamList\dependPeriod;

class upStreamList extends Model
{
    /**
     * @var dependPeriod
     */
    public $dependPeriod;

    /**
     * @var string
     */
    public $dependStrategy;

    /**
     * @var string[]
     */
    public $fieldList;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $periodDiff;

    /**
     * @var bool
     */
    public $sourceNodeEnabled;

    /**
     * @var string
     */
    public $sourceNodeId;

    /**
     * @var string
     */
    public $sourceNodeOutputName;

    /**
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
        'sourceNodeOutputName' => 'SourceNodeOutputName',
        'sourceTableName' => 'SourceTableName',
    ];

    public function validate()
    {
        if (null !== $this->dependPeriod) {
            $this->dependPeriod->validate();
        }
        if (\is_array($this->fieldList)) {
            Model::validateArray($this->fieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dependPeriod) {
            $res['DependPeriod'] = null !== $this->dependPeriod ? $this->dependPeriod->toArray($noStream) : $this->dependPeriod;
        }

        if (null !== $this->dependStrategy) {
            $res['DependStrategy'] = $this->dependStrategy;
        }

        if (null !== $this->fieldList) {
            if (\is_array($this->fieldList)) {
                $res['FieldList'] = [];
                $n1 = 0;
                foreach ($this->fieldList as $item1) {
                    $res['FieldList'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->sourceNodeOutputName) {
            $res['SourceNodeOutputName'] = $this->sourceNodeOutputName;
        }

        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
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
        if (isset($map['DependPeriod'])) {
            $model->dependPeriod = dependPeriod::fromMap($map['DependPeriod']);
        }

        if (isset($map['DependStrategy'])) {
            $model->dependStrategy = $map['DependStrategy'];
        }

        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = [];
                $n1 = 0;
                foreach ($map['FieldList'] as $item1) {
                    $model->fieldList[$n1++] = $item1;
                }
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

        if (isset($map['SourceNodeOutputName'])) {
            $model->sourceNodeOutputName = $map['SourceNodeOutputName'];
        }

        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }

        return $model;
    }
}
