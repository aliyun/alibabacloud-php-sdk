<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePackageConfigResponseBody\livePackageConfigList\livePackageConfig;

class livePackageConfigList extends Model
{
    /**
     * @var livePackageConfig[]
     */
    public $livePackageConfig;
    protected $_name = [
        'livePackageConfig' => 'LivePackageConfig',
    ];

    public function validate()
    {
        if (\is_array($this->livePackageConfig)) {
            Model::validateArray($this->livePackageConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->livePackageConfig) {
            if (\is_array($this->livePackageConfig)) {
                $res['LivePackageConfig'] = [];
                $n1 = 0;
                foreach ($this->livePackageConfig as $item1) {
                    $res['LivePackageConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['LivePackageConfig'])) {
            if (!empty($map['LivePackageConfig'])) {
                $model->livePackageConfig = [];
                $n1 = 0;
                foreach ($map['LivePackageConfig'] as $item1) {
                    $model->livePackageConfig[$n1] = livePackageConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
