<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\LookupTmchNoticeResponseBody\claims\claim\holders\holder\addr;

use AlibabaCloud\Tea\Model;

class street extends Model
{
    /**
     * @var string[]
     */
    public $street;
    protected $_name = [
        'street' => 'Street',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->street) {
            $res['Street'] = $this->street;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return street
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Street'])) {
            if (!empty($map['Street'])) {
                $model->street = $map['Street'];
            }
        }

        return $model;
    }
}
