<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscriptionItemRequest extends Model
{
    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'itemName' => 'ItemName',
        'locale'   => 'Locale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscriptionItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
