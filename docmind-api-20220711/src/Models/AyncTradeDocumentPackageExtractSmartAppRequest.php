<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->customExtractionRange)) {
            Model::validateArray($this->customExtractionRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customExtractionRange) {
            if (\is_array($this->customExtractionRange)) {
                $res['CustomExtractionRange'] = [];
                $n1                           = 0;
                foreach ($this->customExtractionRange as $item1) {
                    $res['CustomExtractionRange'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomExtractionRange'])) {
            if (!empty($map['CustomExtractionRange'])) {
                $model->customExtractionRange = [];
                $n1                           = 0;
                foreach ($map['CustomExtractionRange'] as $item1) {
                    $model->customExtractionRange[$n1++] = $item1;
                }
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
