<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody\livePackageConfigList\livePackageConfig;
use AlibabaCloud\Tea\Model;

class livePackageConfigList extends Model
{
    /**
     * @var livePackageConfig[]
     */
    public $livePackageConfig;
    protected $_name = [
        'livePackageConfig' => 'LivePackageConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePackageConfig) {
            $res['LivePackageConfig'] = [];
            if (null !== $this->livePackageConfig && \is_array($this->livePackageConfig)) {
                $n = 0;
                foreach ($this->livePackageConfig as $item) {
                    $res['LivePackageConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return livePackageConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePackageConfig'])) {
            if (!empty($map['LivePackageConfig'])) {
                $model->livePackageConfig = [];
                $n = 0;
                foreach ($map['LivePackageConfig'] as $item) {
                    $model->livePackageConfig[$n++] = null !== $item ? livePackageConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
