<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody\result\queryParams;

class result extends Model
{
    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var int
     */
    public $componentType;

    /**
     * @var string
     */
    public $componentTypeCnName;

    /**
     * @var string
     */
    public $componentTypeName;

    /**
     * @var string
     */
    public $datasetId;

    /**
     * @var queryParams[]
     */
    public $queryParams;
    protected $_name = [
        'componentId' => 'ComponentId',
        'componentName' => 'ComponentName',
        'componentType' => 'ComponentType',
        'componentTypeCnName' => 'ComponentTypeCnName',
        'componentTypeName' => 'ComponentTypeName',
        'datasetId' => 'DatasetId',
        'queryParams' => 'QueryParams',
    ];

    public function validate()
    {
        if (\is_array($this->queryParams)) {
            Model::validateArray($this->queryParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }

        if (null !== $this->componentTypeCnName) {
            $res['ComponentTypeCnName'] = $this->componentTypeCnName;
        }

        if (null !== $this->componentTypeName) {
            $res['ComponentTypeName'] = $this->componentTypeName;
        }

        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }

        if (null !== $this->queryParams) {
            if (\is_array($this->queryParams)) {
                $res['QueryParams'] = [];
                $n1 = 0;
                foreach ($this->queryParams as $item1) {
                    $res['QueryParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }

        if (isset($map['ComponentTypeCnName'])) {
            $model->componentTypeCnName = $map['ComponentTypeCnName'];
        }

        if (isset($map['ComponentTypeName'])) {
            $model->componentTypeName = $map['ComponentTypeName'];
        }

        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }

        if (isset($map['QueryParams'])) {
            if (!empty($map['QueryParams'])) {
                $model->queryParams = [];
                $n1 = 0;
                foreach ($map['QueryParams'] as $item1) {
                    $model->queryParams[$n1] = queryParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
