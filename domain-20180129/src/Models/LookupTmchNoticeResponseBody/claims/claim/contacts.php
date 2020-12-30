<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim;

use AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\contacts\contact;
use AlibabaCloud\Tea\Model;

class contacts extends Model
{
    /**
     * @var contact[]
     */
    public $contact;
    protected $_name = [
        'contact' => 'Contact',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contact) {
            $res['Contact'] = [];
            if (null !== $this->contact && \is_array($this->contact)) {
                $n = 0;
                foreach ($this->contact as $item) {
                    $res['Contact'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contacts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contact'])) {
            if (!empty($map['Contact'])) {
                $model->contact = [];
                $n              = 0;
                foreach ($map['Contact'] as $item) {
                    $model->contact[$n++] = null !== $item ? contact::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
