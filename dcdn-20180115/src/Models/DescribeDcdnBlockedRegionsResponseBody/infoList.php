<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBlockedRegionsResponseBody\infoList\infoItem;

class infoList extends Model
{
    /**
     * @var infoItem[]
     */
    public $infoItem;
    protected $_name = [
        'infoItem' => 'InfoItem',
    ];

    public function validate()
    {
        if (\is_array($this->infoItem)) {
            Model::validateArray($this->infoItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->infoItem) {
            if (\is_array($this->infoItem)) {
                $res['InfoItem'] = [];
                $n1 = 0;
                foreach ($this->infoItem as $item1) {
                    $res['InfoItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InfoItem'])) {
            if (!empty($map['InfoItem'])) {
                $model->infoItem = [];
                $n1 = 0;
                foreach ($map['InfoItem'] as $item1) {
                    $model->infoItem[$n1] = infoItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
