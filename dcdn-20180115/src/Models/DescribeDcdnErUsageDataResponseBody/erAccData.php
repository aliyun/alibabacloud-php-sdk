<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody\erAccData\erAccItem;

class erAccData extends Model
{
    /**
     * @var erAccItem[]
     */
    public $erAccItem;
    protected $_name = [
        'erAccItem' => 'ErAccItem',
    ];

    public function validate()
    {
        if (\is_array($this->erAccItem)) {
            Model::validateArray($this->erAccItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->erAccItem) {
            if (\is_array($this->erAccItem)) {
                $res['ErAccItem'] = [];
                $n1 = 0;
                foreach ($this->erAccItem as $item1) {
                    $res['ErAccItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErAccItem'])) {
            if (!empty($map['ErAccItem'])) {
                $model->erAccItem = [];
                $n1 = 0;
                foreach ($map['ErAccItem'] as $item1) {
                    $model->erAccItem[$n1] = erAccItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
