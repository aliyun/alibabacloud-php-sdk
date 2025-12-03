<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupResponseBody\domains\domainItem;

class domains extends Model
{
    /**
     * @var domainItem[]
     */
    public $domainItem;
    protected $_name = [
        'domainItem' => 'DomainItem',
    ];

    public function validate()
    {
        if (\is_array($this->domainItem)) {
            Model::validateArray($this->domainItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainItem) {
            if (\is_array($this->domainItem)) {
                $res['DomainItem'] = [];
                $n1 = 0;
                foreach ($this->domainItem as $item1) {
                    $res['DomainItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainItem'])) {
            if (!empty($map['DomainItem'])) {
                $model->domainItem = [];
                $n1 = 0;
                foreach ($map['DomainItem'] as $item1) {
                    $model->domainItem[$n1] = domainItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
