<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class InteractiveScribbleSegmentationAdvanceRequest extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $edgeFeathering;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx01.png
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx05.png
     *
     * @var Stream
     */
    public $integratedMaskUrlObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png
     *
     * @var Stream
     */
    public $maskImageUrlObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx04.png
     *
     * @var Stream
     */
    public $negScribbleImageUrlObject;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx03.png
     *
     * @var Stream
     */
    public $posScribbleImageUrlObject;

    /**
     * @example edgerefine
     *
     * @var string
     */
    public $postprocessOption;

    /**
     * @example only_alpha
     *
     * @var string
     */
    public $returnForm;

    /**
     * @example PNG
     *
     * @var string
     */
    public $returnFormat;
    protected $_name = [
        'edgeFeathering'            => 'EdgeFeathering',
        'imageUrlObject'            => 'ImageUrl',
        'integratedMaskUrlObject'   => 'IntegratedMaskUrl',
        'maskImageUrlObject'        => 'MaskImageUrl',
        'negScribbleImageUrlObject' => 'NegScribbleImageUrl',
        'posScribbleImageUrlObject' => 'PosScribbleImageUrl',
        'postprocessOption'         => 'PostprocessOption',
        'returnForm'                => 'ReturnForm',
        'returnFormat'              => 'ReturnFormat',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeFeathering) {
            $res['EdgeFeathering'] = $this->edgeFeathering;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->integratedMaskUrlObject) {
            $res['IntegratedMaskUrl'] = $this->integratedMaskUrlObject;
        }
        if (null !== $this->maskImageUrlObject) {
            $res['MaskImageUrl'] = $this->maskImageUrlObject;
        }
        if (null !== $this->negScribbleImageUrlObject) {
            $res['NegScribbleImageUrl'] = $this->negScribbleImageUrlObject;
        }
        if (null !== $this->posScribbleImageUrlObject) {
            $res['PosScribbleImageUrl'] = $this->posScribbleImageUrlObject;
        }
        if (null !== $this->postprocessOption) {
            $res['PostprocessOption'] = $this->postprocessOption;
        }
        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }
        if (null !== $this->returnFormat) {
            $res['ReturnFormat'] = $this->returnFormat;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InteractiveScribbleSegmentationAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeFeathering'])) {
            $model->edgeFeathering = $map['EdgeFeathering'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['IntegratedMaskUrl'])) {
            $model->integratedMaskUrlObject = $map['IntegratedMaskUrl'];
        }
        if (isset($map['MaskImageUrl'])) {
            $model->maskImageUrlObject = $map['MaskImageUrl'];
        }
        if (isset($map['NegScribbleImageUrl'])) {
            $model->negScribbleImageUrlObject = $map['NegScribbleImageUrl'];
        }
        if (isset($map['PosScribbleImageUrl'])) {
            $model->posScribbleImageUrlObject = $map['PosScribbleImageUrl'];
        }
        if (isset($map['PostprocessOption'])) {
            $model->postprocessOption = $map['PostprocessOption'];
        }
        if (isset($map['ReturnForm'])) {
            $model->returnForm = $map['ReturnForm'];
        }
        if (isset($map['ReturnFormat'])) {
            $model->returnFormat = $map['ReturnFormat'];
        }

        return $model;
    }
}
