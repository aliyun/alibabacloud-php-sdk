<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class SubmitConvertPdfToWordJobRequest extends Model
{
    /**
     * @example covertPdfToWord.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @var bool
     */
    public $forceExportInnerImage;

    /**
     * @var bool
     */
    public $formulaEnhancement;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;
    protected $_name = [
        'fileName' => 'FileName',
        'fileUrl' => 'FileUrl',
        'forceExportInnerImage' => 'ForceExportInnerImage',
        'formulaEnhancement' => 'FormulaEnhancement',
        'option' => 'Option',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->forceExportInnerImage) {
            $res['ForceExportInnerImage'] = $this->forceExportInnerImage;
        }
        if (null !== $this->formulaEnhancement) {
            $res['FormulaEnhancement'] = $this->formulaEnhancement;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitConvertPdfToWordJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['ForceExportInnerImage'])) {
            $model->forceExportInnerImage = $map['ForceExportInnerImage'];
        }
        if (isset($map['FormulaEnhancement'])) {
            $model->formulaEnhancement = $map['FormulaEnhancement'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        return $model;
    }
}
