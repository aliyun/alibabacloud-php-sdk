<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;

class AyncTradeDocumentPackageExtractSmartAppRequest extends Model
{
    /**
     * @var string[]
     */
    public $customExtractionRange;

    /**
     * @var string
     */
    public $fileName;

    /**
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
        'customExtractionRange' => 'CustomExtractionRange',
        'fileName'              => 'FileName',
        'fileUrl'               => 'FileUrl',
        'option'                => 'Option',
        'templateName'          => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customExtractionRange) {
            $res['CustomExtractionRange'] = $this->customExtractionRange;
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
     * @return AyncTradeDocumentPackageExtractSmartAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomExtractionRange'])) {
            if (!empty($map['CustomExtractionRange'])) {
                $model->customExtractionRange = $map['CustomExtractionRange'];
            }
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
