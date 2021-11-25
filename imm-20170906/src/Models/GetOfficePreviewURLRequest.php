<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetOfficePreviewURLRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var string
     */
    public $srcUri;

    /**
     * @var string
     */
    public $watermarkFillStyle;

    /**
     * @var string
     */
    public $watermarkFont;

    /**
     * @var int
     */
    public $watermarkHorizontal;

    /**
     * @var float
     */
    public $watermarkRotate;

    /**
     * @var int
     */
    public $watermarkType;

    /**
     * @var string
     */
    public $watermarkValue;

    /**
     * @var int
     */
    public $watermarkVertical;
    protected $_name = [
        'project'             => 'Project',
        'srcType'             => 'SrcType',
        'srcUri'              => 'SrcUri',
        'watermarkFillStyle'  => 'WatermarkFillStyle',
        'watermarkFont'       => 'WatermarkFont',
        'watermarkHorizontal' => 'WatermarkHorizontal',
        'watermarkRotate'     => 'WatermarkRotate',
        'watermarkType'       => 'WatermarkType',
        'watermarkValue'      => 'WatermarkValue',
        'watermarkVertical'   => 'WatermarkVertical',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }
        if (null !== $this->srcUri) {
            $res['SrcUri'] = $this->srcUri;
        }
        if (null !== $this->watermarkFillStyle) {
            $res['WatermarkFillStyle'] = $this->watermarkFillStyle;
        }
        if (null !== $this->watermarkFont) {
            $res['WatermarkFont'] = $this->watermarkFont;
        }
        if (null !== $this->watermarkHorizontal) {
            $res['WatermarkHorizontal'] = $this->watermarkHorizontal;
        }
        if (null !== $this->watermarkRotate) {
            $res['WatermarkRotate'] = $this->watermarkRotate;
        }
        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
        }
        if (null !== $this->watermarkValue) {
            $res['WatermarkValue'] = $this->watermarkValue;
        }
        if (null !== $this->watermarkVertical) {
            $res['WatermarkVertical'] = $this->watermarkVertical;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOfficePreviewURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }
        if (isset($map['SrcUri'])) {
            $model->srcUri = $map['SrcUri'];
        }
        if (isset($map['WatermarkFillStyle'])) {
            $model->watermarkFillStyle = $map['WatermarkFillStyle'];
        }
        if (isset($map['WatermarkFont'])) {
            $model->watermarkFont = $map['WatermarkFont'];
        }
        if (isset($map['WatermarkHorizontal'])) {
            $model->watermarkHorizontal = $map['WatermarkHorizontal'];
        }
        if (isset($map['WatermarkRotate'])) {
            $model->watermarkRotate = $map['WatermarkRotate'];
        }
        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }
        if (isset($map['WatermarkValue'])) {
            $model->watermarkValue = $map['WatermarkValue'];
        }
        if (isset($map['WatermarkVertical'])) {
            $model->watermarkVertical = $map['WatermarkVertical'];
        }

        return $model;
    }
}
