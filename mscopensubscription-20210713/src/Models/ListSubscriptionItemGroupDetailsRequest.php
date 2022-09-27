<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class ListSubscriptionItemGroupDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'locale' => 'Locale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubscriptionItemGroupDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
