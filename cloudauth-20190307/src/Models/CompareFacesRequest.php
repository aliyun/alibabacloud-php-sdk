<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CompareFacesRequest extends Model
{
    /**
     * @var string
     */
    public $targetImageType;

    /**
     * @var string
     */
    public $sourceImageType;

    /**
     * @var string
     */
    public $sourceImageValue;

    /**
     * @var string
     */
    public $targetImageValue;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'targetImageType'  => 'TargetImageType',
        'sourceImageType'  => 'SourceImageType',
        'sourceImageValue' => 'SourceImageValue',
        'targetImageValue' => 'TargetImageValue',
        'bizType'          => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetImageType) {
            $res['TargetImageType'] = $this->targetImageType;
        }
        if (null !== $this->sourceImageType) {
            $res['SourceImageType'] = $this->sourceImageType;
        }
        if (null !== $this->sourceImageValue) {
            $res['SourceImageValue'] = $this->sourceImageValue;
        }
        if (null !== $this->targetImageValue) {
            $res['TargetImageValue'] = $this->targetImageValue;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetImageType'])) {
            $model->targetImageType = $map['TargetImageType'];
        }
        if (isset($map['SourceImageType'])) {
            $model->sourceImageType = $map['SourceImageType'];
        }
        if (isset($map['SourceImageValue'])) {
            $model->sourceImageValue = $map['SourceImageValue'];
        }
        if (isset($map['TargetImageValue'])) {
            $model->targetImageValue = $map['TargetImageValue'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
