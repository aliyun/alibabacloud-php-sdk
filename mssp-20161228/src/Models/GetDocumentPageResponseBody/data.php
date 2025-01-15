<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Delivered by.
     *
     * @example luna
     *
     * @var string
     */
    public $deliveredBy;

    /**
     * @description Report name.
     *
     * @example month report
     *
     * @var string
     */
    public $documentName;

    /**
     * @description Service report type.
     *
     * @example 3
     *
     * @var string
     */
    public $documentType;

    /**
     * @description Primary key ID of the document.
     *
     * @example 346409
     *
     * @var int
     */
    public $id;

    /**
     * @description Report status.
     *
     * @example uploaded
     *
     * @var string
     */
    public $reportStatus;

    /**
     * @description Report generation time.
     *
     * @example 2023-03-21 17:26:34
     *
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'deliveredBy'  => 'DeliveredBy',
        'documentName' => 'DocumentName',
        'documentType' => 'DocumentType',
        'id'           => 'Id',
        'reportStatus' => 'ReportStatus',
        'uploadTime'   => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveredBy) {
            $res['DeliveredBy'] = $this->deliveredBy;
        }
        if (null !== $this->documentName) {
            $res['DocumentName'] = $this->documentName;
        }
        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveredBy'])) {
            $model->deliveredBy = $map['DeliveredBy'];
        }
        if (isset($map['DocumentName'])) {
            $model->documentName = $map['DocumentName'];
        }
        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
