<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\Tea\Model;

class CompareFacesRequest extends Model
{
    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var string
     */
    public $sourceImageBase64;

    /**
     * @var string
     */
    public $targetImageUrl;

    /**
     * @var string
     */
    public $targetImageBase64;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'sourceImageUrl'    => 'SourceImageUrl',
        'sourceImageBase64' => 'SourceImageBase64',
        'targetImageUrl'    => 'TargetImageUrl',
        'targetImageBase64' => 'TargetImageBase64',
        'bizId'             => 'BizId',
        'bizType'           => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->sourceImageBase64) {
            $res['SourceImageBase64'] = $this->sourceImageBase64;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->targetImageBase64) {
            $res['TargetImageBase64'] = $this->targetImageBase64;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
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
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['SourceImageBase64'])) {
            $model->sourceImageBase64 = $map['SourceImageBase64'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['TargetImageBase64'])) {
            $model->targetImageBase64 = $map['TargetImageBase64'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
