<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndexDocumentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @example 110002
     *
     * @var string
     */
    public $code;

    /**
     * @example pdf
     *
     * @var string
     */
    public $documentType;

    /**
     * @example doc_c134aa2073204a5d936d870bf960f56a10024701
     *
     * @var string
     */
    public $id;

    /**
     * @example check fileUrlKey[file_path] / fileNameKey[null] / fileExtensionKey[file_extension] is invalid
     *
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 996764
     *
     * @var int
     */
    public $size;

    /**
     * @example cate_21a407a3372c4ba7aedc649709143f0c10021401
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'         => 'Code',
        'documentType' => 'DocumentType',
        'id'           => 'Id',
        'message'      => 'Message',
        'name'         => 'Name',
        'size'         => 'Size',
        'sourceId'     => 'SourceId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->documentType) {
            $res['DocumentType'] = $this->documentType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DocumentType'])) {
            $model->documentType = $map['DocumentType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
