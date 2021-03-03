<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListUnreachableContactsResponseBody\unreachableContacts;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListUnreachableContactsResponseBody\unreachableContacts\list_\contacts;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var int
     */
    public $totalAttempts;
    protected $_name = [
        'contacts'      => 'Contacts',
        'totalAttempts' => 'TotalAttempts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalAttempts) {
            $res['TotalAttempts'] = $this->totalAttempts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalAttempts'])) {
            $model->totalAttempts = $map['TotalAttempts'];
        }

        return $model;
    }
}
