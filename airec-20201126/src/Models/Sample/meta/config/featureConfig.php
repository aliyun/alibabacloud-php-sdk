<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\Sample\meta\config;

use AlibabaCloud\Tea\Model;

class featureConfig extends Model
{
    /**
     * @example 物品特征，支持多值，逗号分隔。
     *
     * @var string
     */
    public $itemFeatures;

    /**
     * @example 用户特征，支持多值，逗号分隔。
     *
     * @var string
     */
    public $userFeatures;
    protected $_name = [
        'itemFeatures' => 'ItemFeatures',
        'userFeatures' => 'UserFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemFeatures) {
            $res['ItemFeatures'] = $this->itemFeatures;
        }
        if (null !== $this->userFeatures) {
            $res['UserFeatures'] = $this->userFeatures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return featureConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemFeatures'])) {
            $model->itemFeatures = $map['ItemFeatures'];
        }
        if (isset($map['UserFeatures'])) {
            $model->userFeatures = $map['UserFeatures'];
        }

        return $model;
    }
}
