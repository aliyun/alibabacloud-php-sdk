<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20201112\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class LivenessDetectAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $mediaFileObject;

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
    protected $_name = [
        'mediaFileObject' => 'MediaFileObject',
        'bizType'         => 'BizType',
        'bizId'           => 'BizId',
        'mediaCategory'   => 'MediaCategory',
        'mediaUrl'        => 'MediaUrl',
    ];

    public function validate()
    {
        Model::validateRequired('mediaFileObject', $this->mediaFileObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaFileObject) {
            $res['MediaFileObject'] = $this->mediaFileObject;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LivenessDetectAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaFileObject'])) {
            $model->mediaFileObject = $map['MediaFileObject'];
        }
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

        return $model;
    }
}
