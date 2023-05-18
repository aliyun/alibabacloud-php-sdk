<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class CompareFacesRequest extends Model
{
    /**
     * @example FacePic
     *
     * @var string
     */
    public $sourceImageType;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $sourceImageValue;

    /**
     * @example FacePic
     *
     * @var string
     */
    public $targetImageType;

    /**
     * @example http%3A%2F%2Fjiangsu.china.com.cn%2Fuploadfile%2F2015%2F0114%2F1421221304095989.jpg
     *
     * @var string
     */
    public $targetImageValue;
    protected $_name = [
        'sourceImageType'  => 'SourceImageType',
        'sourceImageValue' => 'SourceImageValue',
        'targetImageType'  => 'TargetImageType',
        'targetImageValue' => 'TargetImageValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceImageType) {
            $res['SourceImageType'] = $this->sourceImageType;
        }
        if (null !== $this->sourceImageValue) {
            $res['SourceImageValue'] = $this->sourceImageValue;
        }
        if (null !== $this->targetImageType) {
            $res['TargetImageType'] = $this->targetImageType;
        }
        if (null !== $this->targetImageValue) {
            $res['TargetImageValue'] = $this->targetImageValue;
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
        if (isset($map['SourceImageType'])) {
            $model->sourceImageType = $map['SourceImageType'];
        }
        if (isset($map['SourceImageValue'])) {
            $model->sourceImageValue = $map['SourceImageValue'];
        }
        if (isset($map['TargetImageType'])) {
            $model->targetImageType = $map['TargetImageType'];
        }
        if (isset($map['TargetImageValue'])) {
            $model->targetImageValue = $map['TargetImageValue'];
        }

        return $model;
    }
}
