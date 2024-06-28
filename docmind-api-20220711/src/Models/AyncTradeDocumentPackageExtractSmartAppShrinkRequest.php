<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class AyncTradeDocumentPackageExtractSmartAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customExtractionRangeShrink;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $option;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'customExtractionRangeShrink' => 'CustomExtractionRange',
        'fileName'                    => 'FileName',
        'fileUrl'                     => 'FileUrl',
        'option'                      => 'Option',
        'templateName'                => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customExtractionRangeShrink) {
            $res['CustomExtractionRange'] = $this->customExtractionRangeShrink;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AyncTradeDocumentPackageExtractSmartAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomExtractionRange'])) {
            $model->customExtractionRangeShrink = $map['CustomExtractionRange'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
