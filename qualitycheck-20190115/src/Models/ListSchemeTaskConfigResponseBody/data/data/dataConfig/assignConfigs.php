<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs\assignConfig;
use AlibabaCloud\Tea\Model;

class assignConfigs extends Model
{
    /**
     * @var assignConfig[]
     */
    public $assignConfig;
    protected $_name = [
        'assignConfig' => 'AssignConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfig) {
            $res['AssignConfig'] = [];
            if (null !== $this->assignConfig && \is_array($this->assignConfig)) {
                $n = 0;
                foreach ($this->assignConfig as $item) {
                    $res['AssignConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assignConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfig'])) {
            if (!empty($map['AssignConfig'])) {
                $model->assignConfig = [];
                $n                   = 0;
                foreach ($map['AssignConfig'] as $item) {
                    $model->assignConfig[$n++] = null !== $item ? assignConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
