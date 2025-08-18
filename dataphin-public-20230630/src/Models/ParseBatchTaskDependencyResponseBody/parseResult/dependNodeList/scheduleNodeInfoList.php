<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList;

use AlibabaCloud\Dara\Model;

class scheduleNodeInfoList extends Model
{
    /**
     * @var string[]
     */
    public $fieldList;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $outputName;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $tableName;
    protected $_name = [
        'fieldList' => 'FieldList',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'outputName' => 'OutputName',
        'ownerName' => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
        if (\is_array($this->fieldList)) {
            Model::validateArray($this->fieldList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fieldList) {
            if (\is_array($this->fieldList)) {
                $res['FieldList'] = [];
                $n1 = 0;
                foreach ($this->fieldList as $item1) {
                    $res['FieldList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->outputName) {
            $res['OutputName'] = $this->outputName;
        }

        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = [];
                $n1 = 0;
                foreach ($map['FieldList'] as $item1) {
                    $model->fieldList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['OutputName'])) {
            $model->outputName = $map['OutputName'];
        }

        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
