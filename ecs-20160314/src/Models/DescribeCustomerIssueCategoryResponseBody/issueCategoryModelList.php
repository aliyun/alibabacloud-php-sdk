<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCustomerIssueCategoryResponseBody;

use AlibabaCloud\Tea\Model;

class issueCategoryModelList extends Model
{
    /**
     * @var int
     */
    public $issueCategoryId;

    /**
     * @var string
     */
    public $issueCategoryName;

    /**
     * @var int
     */
    public $issueCategoryParentId;

    /**
     * @var int
     */
    public $layer;

    /**
     * @var string
     */
    public $mappingTools;

    /**
     * @var string
     */
    public $metricSetId;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'issueCategoryId'       => 'IssueCategoryId',
        'issueCategoryName'     => 'IssueCategoryName',
        'issueCategoryParentId' => 'IssueCategoryParentId',
        'layer'                 => 'Layer',
        'mappingTools'          => 'MappingTools',
        'metricSetId'           => 'MetricSetId',
        'resourceType'          => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueCategoryId) {
            $res['IssueCategoryId'] = $this->issueCategoryId;
        }
        if (null !== $this->issueCategoryName) {
            $res['IssueCategoryName'] = $this->issueCategoryName;
        }
        if (null !== $this->issueCategoryParentId) {
            $res['IssueCategoryParentId'] = $this->issueCategoryParentId;
        }
        if (null !== $this->layer) {
            $res['Layer'] = $this->layer;
        }
        if (null !== $this->mappingTools) {
            $res['MappingTools'] = $this->mappingTools;
        }
        if (null !== $this->metricSetId) {
            $res['MetricSetId'] = $this->metricSetId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return issueCategoryModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueCategoryId'])) {
            $model->issueCategoryId = $map['IssueCategoryId'];
        }
        if (isset($map['IssueCategoryName'])) {
            $model->issueCategoryName = $map['IssueCategoryName'];
        }
        if (isset($map['IssueCategoryParentId'])) {
            $model->issueCategoryParentId = $map['IssueCategoryParentId'];
        }
        if (isset($map['Layer'])) {
            $model->layer = $map['Layer'];
        }
        if (isset($map['MappingTools'])) {
            $model->mappingTools = $map['MappingTools'];
        }
        if (isset($map['MetricSetId'])) {
            $model->metricSetId = $map['MetricSetId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
