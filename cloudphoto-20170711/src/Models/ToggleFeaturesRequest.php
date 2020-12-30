<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\Tea\Model;

class ToggleFeaturesRequest extends Model
{
    /**
     * @var string
     */
    public $storeName;

    /**
     * @var string[]
     */
    public $enabledFeatures;

    /**
     * @var string[]
     */
    public $disabledFeatures;
    protected $_name = [
        'storeName'        => 'StoreName',
        'enabledFeatures'  => 'EnabledFeatures',
        'disabledFeatures' => 'DisabledFeatures',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storeName) {
            $res['StoreName'] = $this->storeName;
        }
        if (null !== $this->enabledFeatures) {
            $res['EnabledFeatures'] = $this->enabledFeatures;
        }
        if (null !== $this->disabledFeatures) {
            $res['DisabledFeatures'] = $this->disabledFeatures;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ToggleFeaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StoreName'])) {
            $model->storeName = $map['StoreName'];
        }
        if (isset($map['EnabledFeatures'])) {
            if (!empty($map['EnabledFeatures'])) {
                $model->enabledFeatures = $map['EnabledFeatures'];
            }
        }
        if (isset($map['DisabledFeatures'])) {
            if (!empty($map['DisabledFeatures'])) {
                $model->disabledFeatures = $map['DisabledFeatures'];
            }
        }

        return $model;
    }
}
