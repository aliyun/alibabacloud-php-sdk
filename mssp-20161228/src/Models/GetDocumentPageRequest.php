<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentPageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $deliveredBy;

    /**
     * @var string
     */
    public $documentName;

    /**
     * @example 0
     *
     * @var string
     */
    public $documentType;

    /**
     * @description This parameter is required.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $reportType;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'deliveredBy'  => 'DeliveredBy',
        'documentName' => 'DocumentName',
        'documentType' => 'DocumentType',
        'pageSize'     => 'PageSize',
        'reportType'   => 'ReportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deliveredBy) {
            $res['DeliveredBy'] = $this->deliveredBy;
        }
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }
        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDocumentPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeliveredBy'])) {
            $model->deliveredBy = $map['DeliveredBy'];
        }
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }
        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
