<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveDelayConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListLiveDelayConfigResponseBody\delayConfigList\delayConfig;

class delayConfigList extends Model
{
    /**
     * @var delayConfig[]
     */
    public $delayConfig;
    protected $_name = [
        'delayConfig' => 'DelayConfig',
    ];

    public function validate()
    {
        if (\is_array($this->delayConfig)) {
            Model::validateArray($this->delayConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delayConfig) {
            if (\is_array($this->delayConfig)) {
                $res['DelayConfig'] = [];
                $n1 = 0;
                foreach ($this->delayConfig as $item1) {
                    $res['DelayConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DelayConfig'])) {
            if (!empty($map['DelayConfig'])) {
                $model->delayConfig = [];
                $n1 = 0;
                foreach ($map['DelayConfig'] as $item1) {
                    $model->delayConfig[$n1] = delayConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
