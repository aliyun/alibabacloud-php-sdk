<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;

class QueryDomainRealTimePriceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $domainItemShrink;
    protected $_name = [
        'currency' => 'Currency',
        'domainItemShrink' => 'DomainItem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->domainItemShrink) {
            $res['DomainItem'] = $this->domainItemShrink;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DomainItem'])) {
            $model->domainItemShrink = $map['DomainItem'];
        }

        return $model;
    }
}
