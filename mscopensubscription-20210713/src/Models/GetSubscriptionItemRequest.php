<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class GetSubscriptionItemRequest extends Model
{
    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'itemId' => 'ItemId',
        'locale' => 'Locale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubscriptionItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
