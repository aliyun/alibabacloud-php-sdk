<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class GetContactRequest extends Model
{
    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'contactId' => 'ContactId',
        'locale'    => 'Locale',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
