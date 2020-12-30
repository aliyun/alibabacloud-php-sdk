<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigOfVersionResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeConfigOfVersionResponseBody\versionConfigs\versionConfig;
use AlibabaCloud\Tea\Model;

class versionConfigs extends Model
{
    /**
     * @var versionConfig[]
     */
    public $versionConfig;
    protected $_name = [
        'versionConfig' => 'VersionConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->versionConfig) {
            $res['VersionConfig'] = [];
            if (null !== $this->versionConfig && \is_array($this->versionConfig)) {
                $n = 0;
                foreach ($this->versionConfig as $item) {
                    $res['VersionConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VersionConfig'])) {
            if (!empty($map['VersionConfig'])) {
                $model->versionConfig = [];
                $n                    = 0;
                foreach ($map['VersionConfig'] as $item) {
                    $model->versionConfig[$n++] = null !== $item ? versionConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
