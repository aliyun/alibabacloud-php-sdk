<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListCompliancePackTemplatesRequest extends Model
{
    /**
     * @description The ID of the compliance package template.
     *
     * For more information about how to obtain the ID of a compliance package template, see [ListCompliancePackTemplates](~~261176~~).
     * @example ct-d254ff4e06a300cf****
     *
     * @var string
     */
    public $compliancePackTemplateId;

    /**
     * @description The page number.
     *
     * Pages start from page 1. Default value: 1
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Valid values: 1 to 100. Minimum value: 1. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'compliancePackTemplateId' => 'CompliancePackTemplateId',
        'pageNumber'               => 'PageNumber',
        'pageSize'                 => 'PageSize',
        'resourceTypes'            => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackTemplateId) {
            $res['CompliancePackTemplateId'] = $this->compliancePackTemplateId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCompliancePackTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackTemplateId'])) {
            $model->compliancePackTemplateId = $map['CompliancePackTemplateId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
