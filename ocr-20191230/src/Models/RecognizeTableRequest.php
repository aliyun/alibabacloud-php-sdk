<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeTableRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $assureDirection;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasLine;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/ocr/RecognizeTable/RecognizeTable4.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example json
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @example false
     *
     * @var bool
     */
    public $skipDetection;

    /**
     * @example true
     *
     * @var bool
     */
    public $useFinanceModel;
    protected $_name = [
        'assureDirection' => 'AssureDirection',
        'hasLine'         => 'HasLine',
        'imageURL'        => 'ImageURL',
        'outputFormat'    => 'OutputFormat',
        'skipDetection'   => 'SkipDetection',
        'useFinanceModel' => 'UseFinanceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assureDirection) {
            $res['AssureDirection'] = $this->assureDirection;
        }
        if (null !== $this->hasLine) {
            $res['HasLine'] = $this->hasLine;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->skipDetection) {
            $res['SkipDetection'] = $this->skipDetection;
        }
        if (null !== $this->useFinanceModel) {
            $res['UseFinanceModel'] = $this->useFinanceModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssureDirection'])) {
            $model->assureDirection = $map['AssureDirection'];
        }
        if (isset($map['HasLine'])) {
            $model->hasLine = $map['HasLine'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['SkipDetection'])) {
            $model->skipDetection = $map['SkipDetection'];
        }
        if (isset($map['UseFinanceModel'])) {
            $model->useFinanceModel = $map['UseFinanceModel'];
        }

        return $model;
    }
}
