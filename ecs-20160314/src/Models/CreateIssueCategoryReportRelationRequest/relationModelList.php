<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\CreateIssueCategoryReportRelationRequest;

use AlibabaCloud\Tea\Model;

class relationModelList extends Model
{
    /**
     * @var string
     */
    public $customerInputContent;

    /**
     * @var int
     */
    public $issueCategoryId;

    /**
     * @var string
     */
    public $issueCategoryName;

    /**
     * @var string
     */
    public $mappingTools;

    /**
     * @var string
     */
    public $reportId;
    protected $_name = [
        'customerInputContent' => 'CustomerInputContent',
        'issueCategoryId'      => 'IssueCategoryId',
        'issueCategoryName'    => 'IssueCategoryName',
        'mappingTools'         => 'MappingTools',
        'reportId'             => 'ReportId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerInputContent) {
            $res['CustomerInputContent'] = $this->customerInputContent;
        }
        if (null !== $this->issueCategoryId) {
            $res['IssueCategoryId'] = $this->issueCategoryId;
        }
        if (null !== $this->issueCategoryName) {
            $res['IssueCategoryName'] = $this->issueCategoryName;
        }
        if (null !== $this->mappingTools) {
            $res['MappingTools'] = $this->mappingTools;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationModelList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerInputContent'])) {
            $model->customerInputContent = $map['CustomerInputContent'];
        }
        if (isset($map['IssueCategoryId'])) {
            $model->issueCategoryId = $map['IssueCategoryId'];
        }
        if (isset($map['IssueCategoryName'])) {
            $model->issueCategoryName = $map['IssueCategoryName'];
        }
        if (isset($map['MappingTools'])) {
            $model->mappingTools = $map['MappingTools'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
