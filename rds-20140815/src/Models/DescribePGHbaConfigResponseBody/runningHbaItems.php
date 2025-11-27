<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePGHbaConfigResponseBody\runningHbaItems\hbaItem;

class runningHbaItems extends Model
{
    /**
     * @var hbaItem[]
     */
    public $hbaItem;
    protected $_name = [
        'hbaItem' => 'HbaItem',
    ];

    public function validate()
    {
        if (\is_array($this->hbaItem)) {
            Model::validateArray($this->hbaItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hbaItem) {
            if (\is_array($this->hbaItem)) {
                $res['HbaItem'] = [];
                $n1 = 0;
                foreach ($this->hbaItem as $item1) {
                    $res['HbaItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HbaItem'])) {
            if (!empty($map['HbaItem'])) {
                $model->hbaItem = [];
                $n1 = 0;
                foreach ($map['HbaItem'] as $item1) {
                    $model->hbaItem[$n1] = hbaItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
