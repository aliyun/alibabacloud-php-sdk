<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody;

use AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryWorksBloodRelationshipResponseBody\result\queryParams;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description List of work blood information.
     *
     * @example 0696083a-ca72-4d89-8e7a-c017910e0***
     *
     * @var string
     */
    public $componentId;

    /**
     * @description The ID of the component that you want to modify.
     *
     * @example The name of the component.
     *
     * @var string
     */
    public $componentName;

    /**
     * @description Line
     *
     * @example 3
     *
     * @var int
     */
    public $componentType;

    /**
     * @description The type of the image component.
     *
     * @example LINE
     *
     * @var string
     */
    public $componentTypeName;

    /**
     * @description Column (Measure)
     *
     * @example dc78a4ed-880d-452e-b017-90cfc10c83e5_company_sales_record
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description The name of the component type.
     *
     * @var queryParams[]
     */
    public $queryParams;
    protected $_name = [
        'componentId'       => 'ComponentId',
        'componentName'     => 'ComponentName',
        'componentType'     => 'ComponentType',
        'componentTypeName' => 'ComponentTypeName',
        'datasetId'         => 'DatasetId',
        'queryParams'       => 'QueryParams',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->componentTypeName) {
            $res['ComponentTypeName'] = $this->componentTypeName;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->queryParams) {
            $res['QueryParams'] = [];
            if (null !== $this->queryParams && \is_array($this->queryParams)) {
                $n = 0;
                foreach ($this->queryParams as $item) {
                    $res['QueryParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
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
                $n                  = 0;
                foreach ($map['QueryParams'] as $item) {
                    $model->queryParams[$n++] = null !== $item ? queryParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
