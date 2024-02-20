<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class GenerateTextTextureAdvanceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $alphaChannel;

    /**
     * @example dongfangdakai
     *
     * @var string
     */
    public $fontName;

    /**
     * @example 512
     *
     * @var int
     */
    public $imageShortSize;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png
     *
     * @var Stream
     */
    public $imageUrlObject;

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
     * @example material
     *
     * @var string
     */
    public $textureStyle;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png
     *
     * @var Stream
     */
    public $ttfUrlObject;
    protected $_name = [
        'alphaChannel'     => 'AlphaChannel',
        'fontName'         => 'FontName',
        'imageShortSize'   => 'ImageShortSize',
        'imageUrlObject'   => 'ImageUrl',
        'n'                => 'N',
        'outputImageRatio' => 'OutputImageRatio',
        'prompt'           => 'Prompt',
        'textContent'      => 'TextContent',
        'textureStyle'     => 'TextureStyle',
        'ttfUrlObject'     => 'TtfUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alphaChannel) {
            $res['AlphaChannel'] = $this->alphaChannel;
        }
        if (null !== $this->fontName) {
            $res['FontName'] = $this->fontName;
        }
        if (null !== $this->imageShortSize) {
            $res['ImageShortSize'] = $this->imageShortSize;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
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
        if (null !== $this->textureStyle) {
            $res['TextureStyle'] = $this->textureStyle;
        }
        if (null !== $this->ttfUrlObject) {
            $res['TtfUrl'] = $this->ttfUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateTextTextureAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlphaChannel'])) {
            $model->alphaChannel = $map['AlphaChannel'];
        }
        if (isset($map['FontName'])) {
            $model->fontName = $map['FontName'];
        }
        if (isset($map['ImageShortSize'])) {
            $model->imageShortSize = $map['ImageShortSize'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
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
        if (isset($map['TextureStyle'])) {
            $model->textureStyle = $map['TextureStyle'];
        }
        if (isset($map['TtfUrl'])) {
            $model->ttfUrlObject = $map['TtfUrl'];
        }

        return $model;
    }
}
