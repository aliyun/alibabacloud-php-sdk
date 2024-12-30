<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ParseBatchTaskDependencyResponseBody\parseResult\dependNodeList;

use AlibabaCloud\Tea\Model;

class scheduleNodeInfoList extends Model
{
    /**
     * @var string[]
     */
    public $fieldList;

    /**
     * @example n_11013121
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example test11
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example t_test
     *
     * @var string
     */
    public $outputName;

    /**
     * @example 张三
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 201122301
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @example t_test
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'fieldList'   => 'FieldList',
        'nodeId'      => 'NodeId',
        'nodeName'    => 'NodeName',
        'outputName'  => 'OutputName',
        'ownerName'   => 'OwnerName',
        'ownerUserId' => 'OwnerUserId',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldList) {
            $res['FieldList'] = $this->fieldList;
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

    /**
     * @param array $map
     *
     * @return scheduleNodeInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldList'])) {
            if (!empty($map['FieldList'])) {
                $model->fieldList = $map['FieldList'];
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
