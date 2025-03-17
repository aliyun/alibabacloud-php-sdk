<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Docmindapi\V20220711\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitDocParserJobAdvanceRequest extends Model
{
    /**
     * @example docStructure.pdf
     *
     * @var string
     */
    public $fileName;

    /**
     * @example pdf
     *
     * @var string
     */
    public $fileNameExtension;

    /**
     * @example https://gw.alipayobjects.com/os/basement_prod/598b9edf-5287-4065-9e36-464305c60698.pdf
     *
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var bool
     */
    public $formulaEnhancement;

    /**
     * @var bool
     */
    public $llmEnhancement;

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
        'fileNameExtension' => 'FileNameExtension',
        'fileUrlObject' => 'FileUrl',
        'formulaEnhancement' => 'FormulaEnhancement',
        'llmEnhancement' => 'LlmEnhancement',
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
        if (null !== $this->fileNameExtension) {
            $res['FileNameExtension'] = $this->fileNameExtension;
        }
        if (null !== $this->fileUrlObject) {
            $res['FileUrl'] = $this->fileUrlObject;
        }
        if (null !== $this->formulaEnhancement) {
            $res['FormulaEnhancement'] = $this->formulaEnhancement;
        }
        if (null !== $this->llmEnhancement) {
            $res['LlmEnhancement'] = $this->llmEnhancement;
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
     * @return SubmitDocParserJobAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileNameExtension'])) {
            $model->fileNameExtension = $map['FileNameExtension'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrlObject = $map['FileUrl'];
        }
        if (isset($map['FormulaEnhancement'])) {
            $model->formulaEnhancement = $map['FormulaEnhancement'];
        }
        if (isset($map['LlmEnhancement'])) {
            $model->llmEnhancement = $map['LlmEnhancement'];
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
