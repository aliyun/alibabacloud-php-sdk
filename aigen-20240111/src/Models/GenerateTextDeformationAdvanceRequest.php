<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateTextDeformationAdvanceRequest extends Model
{
    /**
     * @description 1
     *
     * @example 1
     *
     * @var bool
     */
    public $async;

    /**
     * @example dongfangdakai
     *
     * @var string
     */
    public $fontName;

    /**
     * @example 1
     *
     * @var int
     */
    public $n;

    /**
     * @example 1:1
     *
     * @var string
     */
    public $outputImageRatio;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var string
     */
    public $textContent;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/synthesis/GenerateTextDeformation/xxx01.ttf
     *
     * @var Stream
     */
    public $ttfUrlObject;
    protected $_name = [
        'async'            => 'Async',
        'fontName'         => 'FontName',
        'n'                => 'N',
        'outputImageRatio' => 'OutputImageRatio',
        'prompt'           => 'Prompt',
        'textContent'      => 'TextContent',
        'ttfUrlObject'     => 'TtfUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->n) {
            $res['N'] = $this->n;
        }
        if (null !== $this->outputImageRatio) {
            $res['OutputImageRatio'] = $this->outputImageRatio;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->textContent) {
            $res['TextContent'] = $this->textContent;
        }
        if (null !== $this->ttfUrlObject) {
            $res['TtfUrl'] = $this->ttfUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTextDeformationAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['N'])) {
            $model->n = $map['N'];
        }
        if (isset($map['OutputImageRatio'])) {
            $model->outputImageRatio = $map['OutputImageRatio'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['TextContent'])) {
            $model->textContent = $map['TextContent'];
        }
        if (isset($map['TtfUrl'])) {
            $model->ttfUrlObject = $map['TtfUrl'];
        }

        return $model;
    }
}
