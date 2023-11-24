<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionResourceResponseBody;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\GetFunctionResourceResponseBody\result\data;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1234
     *
     * @var int
     */
    public $createTime;

    /**
     * @var data
     */
    public $data;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example rank
     *
     * @var string
     */
    public $functionName;

    /**
     * @example 1234
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $referencedInstances;

    /**
     * @example fg_json
     *
     * @var string
     */
    public $resourceName;

    /**
     * @example raw_file
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'data'                => 'Data',
        'description'         => 'Description',
        'functionName'        => 'FunctionName',
        'modifyTime'          => 'ModifyTime',
        'referencedInstances' => 'ReferencedInstances',
        'resourceName'        => 'ResourceName',
        'resourceType'        => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->referencedInstances) {
            $res['ReferencedInstances'] = $this->referencedInstances;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ReferencedInstances'])) {
            if (!empty($map['ReferencedInstances'])) {
                $model->referencedInstances = $map['ReferencedInstances'];
            }
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
