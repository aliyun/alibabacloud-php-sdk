<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\Tea\Model;

class LivenessDetectRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $mediaCategory;

    /**
     * @var string
     */
    public $mediaUrl;

    /**
     * @var string
     */
    public $mediaFile;
    protected $_name = [
        'bizType'       => 'BizType',
        'bizId'         => 'BizId',
        'mediaCategory' => 'MediaCategory',
        'mediaUrl'      => 'MediaUrl',
        'mediaFile'     => 'MediaFile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->mediaCategory) {
            $res['MediaCategory'] = $this->mediaCategory;
        }
        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }
        if (null !== $this->mediaFile) {
            $res['MediaFile'] = $this->mediaFile;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LivenessDetectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['MediaCategory'])) {
            $model->mediaCategory = $map['MediaCategory'];
        }
        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }
        if (isset($map['MediaFile'])) {
            $model->mediaFile = $map['MediaFile'];
        }

        return $model;
    }
}
