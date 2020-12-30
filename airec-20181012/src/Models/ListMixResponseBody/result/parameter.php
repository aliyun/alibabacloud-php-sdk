<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListMixResponseBody\result;

use AlibabaCloud\SDK\Airec\V20181012\Models\ListMixResponseBody\result\parameter\settings;
use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @var settings[]
     */
    public $settings;
    protected $_name = [
        'settings' => 'Settings',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->settings) {
            $res['Settings'] = [];
            if (null !== $this->settings && \is_array($this->settings)) {
                $n = 0;
                foreach ($this->settings as $item) {
                    $res['Settings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Settings'])) {
            if (!empty($map['Settings'])) {
                $model->settings = [];
                $n               = 0;
                foreach ($map['Settings'] as $item) {
                    $model->settings[$n++] = null !== $item ? settings::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
