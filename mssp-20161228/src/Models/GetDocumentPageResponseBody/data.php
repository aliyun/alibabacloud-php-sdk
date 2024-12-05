<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetDocumentPageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Delivered by.
     *
     * @example 张三
     *
     * @var string
     */
    public $deliveredBy;

    /**
     * @description Report name.
     *
     * @example 季度报告
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
     * @description Document primary key ID.
     *
     * @example 346409
     *
     * @var int
     */
    public $id;

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
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
