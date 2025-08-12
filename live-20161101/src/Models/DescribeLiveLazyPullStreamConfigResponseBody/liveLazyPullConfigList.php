<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponseBody\liveLazyPullConfigList\liveLazyPullConfig;

class liveLazyPullConfigList extends Model
{
    /**
     * @var liveLazyPullConfig[]
     */
    public $liveLazyPullConfig;
    protected $_name = [
        'liveLazyPullConfig' => 'LiveLazyPullConfig',
    ];

    public function validate()
    {
        if (\is_array($this->liveLazyPullConfig)) {
            Model::validateArray($this->liveLazyPullConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->liveLazyPullConfig) {
            if (\is_array($this->liveLazyPullConfig)) {
                $res['LiveLazyPullConfig'] = [];
                $n1 = 0;
                foreach ($this->liveLazyPullConfig as $item1) {
                    $res['LiveLazyPullConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LiveLazyPullConfig'])) {
            if (!empty($map['LiveLazyPullConfig'])) {
                $model->liveLazyPullConfig = [];
                $n1 = 0;
                foreach ($map['LiveLazyPullConfig'] as $item1) {
                    $model->liveLazyPullConfig[$n1] = liveLazyPullConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
