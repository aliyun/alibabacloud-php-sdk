<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionResourcesResponseBody\result\data;

class result extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string[]
     */
    public $referencedInstances;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'data' => 'Data',
        'description' => 'Description',
        'functionName' => 'FunctionName',
        'modifyTime' => 'ModifyTime',
        'referencedInstances' => 'ReferencedInstances',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        if (null !== $this->data) {
            $this->data->validate();
        }
        if (\is_array($this->referencedInstances)) {
            Model::validateArray($this->referencedInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
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
            if (\is_array($this->referencedInstances)) {
                $res['ReferencedInstances'] = [];
                $n1 = 0;
                foreach ($this->referencedInstances as $item1) {
                    $res['ReferencedInstances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
                $model->referencedInstances = [];
                $n1 = 0;
                foreach ($map['ReferencedInstances'] as $item1) {
                    $model->referencedInstances[$n1] = $item1;
                    ++$n1;
                }
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
