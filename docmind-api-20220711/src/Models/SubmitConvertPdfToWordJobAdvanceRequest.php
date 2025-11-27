<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitConvertPdfToWordJobAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $enableEventCallback;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Stream
     */
    public $fileUrlObject;

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
        'enableEventCallback' => 'EnableEventCallback',
        'fileName' => 'FileName',
        'fileUrlObject' => 'FileUrl',
        'forceExportInnerImage' => 'ForceExportInnerImage',
        'formulaEnhancement' => 'FormulaEnhancement',
        'option' => 'Option',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableEventCallback) {
            $res['EnableEventCallback'] = $this->enableEventCallback;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableEventCallback'])) {
            $model->enableEventCallback = $map['EnableEventCallback'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
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
