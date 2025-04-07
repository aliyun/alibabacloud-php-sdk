<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class ApplyFileUploadLeaseRequest extends Model
{
    /**
     * @var string
     */
    public $categoryType;

    /**
     * @description The name of the uploaded document, including the extension. Supported formats: pdf, doc, docx, md, txt, ppt, and pptx. The document name must be 4 to 128 characters in length.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The MD5 value of the uploaded document. This parameter is verified by the server (not in the current version).
     *
     * This parameter is required.
     *
     * @example 19657c391f6c70bcea63c154d8606bb3
     *
     * @var string
     */
    public $md5;

    /**
     * @description The size of the uploaded document, in bytes. This parameter is verified by the server (not in the current version). Valid values: 1 to 100000000.
     *
     * This parameter is required.
     *
     * @example 1000
     *
     * @var string
     */
    public $sizeInBytes;

    /**
     * @var bool
     */
    public $useInternalEndpoint;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'fileName' => 'FileName',
        'md5' => 'Md5',
        'sizeInBytes' => 'SizeInBytes',
        'useInternalEndpoint' => 'UseInternalEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->sizeInBytes) {
            $res['SizeInBytes'] = $this->sizeInBytes;
        }
        if (null !== $this->useInternalEndpoint) {
            $res['UseInternalEndpoint'] = $this->useInternalEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyFileUploadLeaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['SizeInBytes'])) {
            $model->sizeInBytes = $map['SizeInBytes'];
        }
        if (isset($map['UseInternalEndpoint'])) {
            $model->useInternalEndpoint = $map['UseInternalEndpoint'];
        }

        return $model;
    }
}
