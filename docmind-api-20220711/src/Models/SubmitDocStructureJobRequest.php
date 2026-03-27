<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;

class SubmitDocStructureJobRequest extends Model
{
    /**
     * @var bool
     */
    public $allowPptFormat;

    /**
     * @var bool
     */
    public $enableEventCallback;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileNameExtension;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var bool
     */
    public $formulaEnhancement;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossEndpoint;

    /**
     * @var string[]
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $pageIndex;

    /**
     * @var string
     */
    public $structureType;
    protected $_name = [
        'allowPptFormat' => 'AllowPptFormat',
        'enableEventCallback' => 'EnableEventCallback',
        'fileName' => 'FileName',
        'fileNameExtension' => 'FileNameExtension',
        'fileUrl' => 'FileUrl',
        'formulaEnhancement' => 'FormulaEnhancement',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'outputFormat' => 'OutputFormat',
        'pageIndex' => 'PageIndex',
        'structureType' => 'StructureType',
    ];

    public function validate()
    {
        if (\is_array($this->outputFormat)) {
            Model::validateArray($this->outputFormat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowPptFormat) {
            $res['AllowPptFormat'] = $this->allowPptFormat;
        }

        if (null !== $this->enableEventCallback) {
            $res['EnableEventCallback'] = $this->enableEventCallback;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        if (null !== $this->formulaEnhancement) {
            $res['FormulaEnhancement'] = $this->formulaEnhancement;
        }

        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }

        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }

        if (null !== $this->outputFormat) {
            if (\is_array($this->outputFormat)) {
                $res['OutputFormat'] = [];
                $n1 = 0;
                foreach ($this->outputFormat as $item1) {
                    $res['OutputFormat'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->structureType) {
            $res['StructureType'] = $this->structureType;
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
        if (isset($map['AllowPptFormat'])) {
            $model->allowPptFormat = $map['AllowPptFormat'];
        }

        if (isset($map['EnableEventCallback'])) {
            $model->enableEventCallback = $map['EnableEventCallback'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        if (isset($map['FormulaEnhancement'])) {
            $model->formulaEnhancement = $map['FormulaEnhancement'];
        }

        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }

        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }

        if (isset($map['OutputFormat'])) {
            if (!empty($map['OutputFormat'])) {
                $model->outputFormat = [];
                $n1 = 0;
                foreach ($map['OutputFormat'] as $item1) {
                    $model->outputFormat[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['StructureType'])) {
            $model->structureType = $map['StructureType'];
        }

        return $model;
    }
}
