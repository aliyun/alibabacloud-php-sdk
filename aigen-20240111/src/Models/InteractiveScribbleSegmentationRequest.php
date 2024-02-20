<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aigen\V20240111\Models;

use AlibabaCloud\Tea\Model;

class InteractiveScribbleSegmentationRequest extends Model
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
     * @var string
     */
    public $imageUrl;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx05.png
     *
     * @var string
     */
    public $integratedMaskUrl;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx02.png
     *
     * @var string
     */
    public $maskImageUrl;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx04.png
     *
     * @var string
     */
    public $negScribbleImageUrl;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/aigen/xxx03.png
     *
     * @var string
     */
    public $posScribbleImageUrl;

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
        'edgeFeathering'      => 'EdgeFeathering',
        'imageUrl'            => 'ImageUrl',
        'integratedMaskUrl'   => 'IntegratedMaskUrl',
        'maskImageUrl'        => 'MaskImageUrl',
        'negScribbleImageUrl' => 'NegScribbleImageUrl',
        'posScribbleImageUrl' => 'PosScribbleImageUrl',
        'postprocessOption'   => 'PostprocessOption',
        'returnForm'          => 'ReturnForm',
        'returnFormat'        => 'ReturnFormat',
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
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->integratedMaskUrl) {
            $res['IntegratedMaskUrl'] = $this->integratedMaskUrl;
        }
        if (null !== $this->maskImageUrl) {
            $res['MaskImageUrl'] = $this->maskImageUrl;
        }
        if (null !== $this->negScribbleImageUrl) {
            $res['NegScribbleImageUrl'] = $this->negScribbleImageUrl;
        }
        if (null !== $this->posScribbleImageUrl) {
            $res['PosScribbleImageUrl'] = $this->posScribbleImageUrl;
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
     * @return InteractiveScribbleSegmentationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeFeathering'])) {
            $model->edgeFeathering = $map['EdgeFeathering'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['IntegratedMaskUrl'])) {
            $model->integratedMaskUrl = $map['IntegratedMaskUrl'];
        }
        if (isset($map['MaskImageUrl'])) {
            $model->maskImageUrl = $map['MaskImageUrl'];
        }
        if (isset($map['NegScribbleImageUrl'])) {
            $model->negScribbleImageUrl = $map['NegScribbleImageUrl'];
        }
        if (isset($map['PosScribbleImageUrl'])) {
            $model->posScribbleImageUrl = $map['PosScribbleImageUrl'];
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
