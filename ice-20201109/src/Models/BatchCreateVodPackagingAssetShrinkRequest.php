<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class BatchCreateVodPackagingAssetShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assetsShrink;
    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'assetsShrink' => 'Assets',
        'groupName'    => 'GroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetsShrink) {
            $res['Assets'] = $this->assetsShrink;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['Assets'])) {
            $model->assetsShrink = $map['Assets'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
