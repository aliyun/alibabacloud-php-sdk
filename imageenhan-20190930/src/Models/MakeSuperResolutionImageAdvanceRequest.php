<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MakeSuperResolutionImageAdvanceRequest extends Model
{
    /**
     * @example base
     *
     * @var string
     */
    public $mode;

    /**
     * @example png
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example 95
     *
     * @var int
     */
    public $outputQuality;

    /**
     * @example 2
     *
     * @var int
     */
    public $upscaleFactor;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/imageenhan/MakeSuperResolutionImage/MakeSuperResolutionImage5.png
     *
     * @var Stream
     */
    public $urlObject;
    protected $_name = [
        'mode'          => 'Mode',
        'outputFormat'  => 'OutputFormat',
        'outputQuality' => 'OutputQuality',
        'upscaleFactor' => 'UpscaleFactor',
        'urlObject'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->outputQuality) {
            $res['OutputQuality'] = $this->outputQuality;
        }
        if (null !== $this->upscaleFactor) {
            $res['UpscaleFactor'] = $this->upscaleFactor;
        }
        if (null !== $this->urlObject) {
            $res['Url'] = $this->urlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MakeSuperResolutionImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['OutputQuality'])) {
            $model->outputQuality = $map['OutputQuality'];
        }
        if (isset($map['UpscaleFactor'])) {
            $model->upscaleFactor = $map['UpscaleFactor'];
        }
        if (isset($map['Url'])) {
            $model->urlObject = $map['Url'];
        }

        return $model;
    }
}
