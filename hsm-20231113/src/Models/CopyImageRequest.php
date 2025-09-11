<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hsm\V20231113\Models;

use AlibabaCloud\Dara\Model;

class CopyImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageUid;

    /**
     * @var string
     */
    public $targetRegionId;
    protected $_name = [
        'imageUid' => 'ImageUid',
        'targetRegionId' => 'TargetRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
