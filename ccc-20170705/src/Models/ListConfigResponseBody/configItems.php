<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListConfigResponseBody\configItems\configItem;

class configItems extends Model
{
    /**
     * @var configItem[]
     */
    public $configItem;
    protected $_name = [
        'configItem' => 'ConfigItem',
    ];

    public function validate()
    {
        if (\is_array($this->configItem)) {
            Model::validateArray($this->configItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configItem) {
            if (\is_array($this->configItem)) {
                $res['ConfigItem'] = [];
                $n1 = 0;
                foreach ($this->configItem as $item1) {
                    $res['ConfigItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigItem'])) {
            if (!empty($map['ConfigItem'])) {
                $model->configItem = [];
                $n1 = 0;
                foreach ($map['ConfigItem'] as $item1) {
                    $model->configItem[$n1] = configItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
