<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody\resourceTypes\codeMapping;

class resourceTypes extends Model
{
    /**
     * @var codeMapping
     */
    public $codeMapping;
    /**
     * @var string[]
     */
    public $filterKeys;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string[]
     */
    public $relatedResourceTypes;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $resourceTypeName;
    protected $_name = [
        'codeMapping'          => 'CodeMapping',
        'filterKeys'           => 'FilterKeys',
        'productName'          => 'ProductName',
        'relatedResourceTypes' => 'RelatedResourceTypes',
        'resourceType'         => 'ResourceType',
        'resourceTypeName'     => 'ResourceTypeName',
    ];

    public function validate()
    {
        if (null !== $this->codeMapping) {
            $this->codeMapping->validate();
        }
        if (\is_array($this->filterKeys)) {
            Model::validateArray($this->filterKeys);
        }
        if (\is_array($this->relatedResourceTypes)) {
            Model::validateArray($this->relatedResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeMapping) {
            $res['CodeMapping'] = null !== $this->codeMapping ? $this->codeMapping->toArray($noStream) : $this->codeMapping;
        }

        if (null !== $this->filterKeys) {
            if (\is_array($this->filterKeys)) {
                $res['FilterKeys'] = [];
                $n1                = 0;
                foreach ($this->filterKeys as $item1) {
                    $res['FilterKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->relatedResourceTypes) {
            if (\is_array($this->relatedResourceTypes)) {
                $res['RelatedResourceTypes'] = [];
                $n1                          = 0;
                foreach ($this->relatedResourceTypes as $item1) {
                    $res['RelatedResourceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->resourceTypeName) {
            $res['ResourceTypeName'] = $this->resourceTypeName;
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
        if (isset($map['CodeMapping'])) {
            $model->codeMapping = codeMapping::fromMap($map['CodeMapping']);
        }

        if (isset($map['FilterKeys'])) {
            if (!empty($map['FilterKeys'])) {
                $model->filterKeys = [];
                $n1                = 0;
                foreach ($map['FilterKeys'] as $item1) {
                    $model->filterKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['RelatedResourceTypes'])) {
            if (!empty($map['RelatedResourceTypes'])) {
                $model->relatedResourceTypes = [];
                $n1                          = 0;
                foreach ($map['RelatedResourceTypes'] as $item1) {
                    $model->relatedResourceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['ResourceTypeName'])) {
            $model->resourceTypeName = $map['ResourceTypeName'];
        }

        return $model;
    }
}
