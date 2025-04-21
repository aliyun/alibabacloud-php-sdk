<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class CompareFacesRequest extends Model
{
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
    public $targetImageType;

    /**
     * @var string
     */
    public $targetImageValue;
    protected $_name = [
        'sourceImageType' => 'SourceImageType',
        'sourceImageValue' => 'SourceImageValue',
        'targetImageType' => 'TargetImageType',
        'targetImageValue' => 'TargetImageValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
