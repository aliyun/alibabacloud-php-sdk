<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\largeKeys\largeKey;

class largeKeys extends Model
{
    /**
     * @var largeKey[]
     */
    public $largeKey;
    protected $_name = [
        'largeKey' => 'LargeKey',
    ];

    public function validate()
    {
        if (\is_array($this->largeKey)) {
            Model::validateArray($this->largeKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->largeKey) {
            if (\is_array($this->largeKey)) {
                $res['LargeKey'] = [];
                $n1 = 0;
                foreach ($this->largeKey as $item1) {
                    $res['LargeKey'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LargeKey'])) {
            if (!empty($map['LargeKey'])) {
                $model->largeKey = [];
                $n1 = 0;
                foreach ($map['LargeKey'] as $item1) {
                    $model->largeKey[$n1] = largeKey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
