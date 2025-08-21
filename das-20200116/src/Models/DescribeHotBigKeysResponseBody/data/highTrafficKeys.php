<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\highTrafficKeys\highTrafficKey;

class highTrafficKeys extends Model
{
    /**
     * @var highTrafficKey[]
     */
    public $highTrafficKey;
    protected $_name = [
        'highTrafficKey' => 'HighTrafficKey',
    ];

    public function validate()
    {
        if (\is_array($this->highTrafficKey)) {
            Model::validateArray($this->highTrafficKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highTrafficKey) {
            if (\is_array($this->highTrafficKey)) {
                $res['HighTrafficKey'] = [];
                $n1 = 0;
                foreach ($this->highTrafficKey as $item1) {
                    $res['HighTrafficKey'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HighTrafficKey'])) {
            if (!empty($map['HighTrafficKey'])) {
                $model->highTrafficKey = [];
                $n1 = 0;
                foreach ($map['HighTrafficKey'] as $item1) {
                    $model->highTrafficKey[$n1] = highTrafficKey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
