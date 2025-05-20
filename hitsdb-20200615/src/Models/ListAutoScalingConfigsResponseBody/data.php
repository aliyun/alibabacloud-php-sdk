<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsResponseBody\data\scaleConfigs;

class data extends Model
{
    /**
     * @var scaleConfigs[]
     */
    public $scaleConfigs;
    protected $_name = [
        'scaleConfigs' => 'ScaleConfigs',
    ];

    public function validate()
    {
        if (\is_array($this->scaleConfigs)) {
            Model::validateArray($this->scaleConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scaleConfigs) {
            if (\is_array($this->scaleConfigs)) {
                $res['ScaleConfigs'] = [];
                $n1 = 0;
                foreach ($this->scaleConfigs as $item1) {
                    $res['ScaleConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ScaleConfigs'])) {
            if (!empty($map['ScaleConfigs'])) {
                $model->scaleConfigs = [];
                $n1 = 0;
                foreach ($map['ScaleConfigs'] as $item1) {
                    $model->scaleConfigs[$n1++] = scaleConfigs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
