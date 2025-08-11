<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class SynchronizeAppShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $targetRegionIdsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'targetRegionIdsShrink' => 'TargetRegionIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->targetRegionIdsShrink) {
            $res['TargetRegionIds'] = $this->targetRegionIdsShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['TargetRegionIds'])) {
            $model->targetRegionIdsShrink = $map['TargetRegionIds'];
        }

        return $model;
    }
}
