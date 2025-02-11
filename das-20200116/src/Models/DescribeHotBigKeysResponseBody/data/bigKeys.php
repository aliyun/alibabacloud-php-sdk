<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponseBody\data\bigKeys\bigKey;

class bigKeys extends Model
{
    /**
     * @var bigKey[]
     */
    public $bigKey;
    protected $_name = [
        'bigKey' => 'BigKey',
    ];

    public function validate()
    {
        if (\is_array($this->bigKey)) {
            Model::validateArray($this->bigKey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bigKey) {
            if (\is_array($this->bigKey)) {
                $res['BigKey'] = [];
                $n1            = 0;
                foreach ($this->bigKey as $item1) {
                    $res['BigKey'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BigKey'])) {
            if (!empty($map['BigKey'])) {
                $model->bigKey = [];
                $n1            = 0;
                foreach ($map['BigKey'] as $item1) {
                    $model->bigKey[$n1++] = bigKey::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
