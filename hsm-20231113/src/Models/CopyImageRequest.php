<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Tea\Model;

class CopyImageRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example image-hafiudfahdd****
     *
     * @var string
     */
    public $imageUid;

    /**
     * @description The ID of the destination region.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $targetRegionId;
    protected $_name = [
        'imageUid'       => 'ImageUid',
        'targetRegionId' => 'TargetRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUid) {
            $res['ImageUid'] = $this->imageUid;
        }
        if (null !== $this->targetRegionId) {
            $res['TargetRegionId'] = $this->targetRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUid'])) {
            $model->imageUid = $map['ImageUid'];
        }
        if (isset($map['TargetRegionId'])) {
            $model->targetRegionId = $map['TargetRegionId'];
        }

        return $model;
    }
}
