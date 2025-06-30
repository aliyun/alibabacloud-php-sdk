<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderDetailResponseBody\module;

use AlibabaCloud\Dara\Model;

class contactInfo extends Model
{
    /**
     * @var string
     */
    public $contactName;
    protected $_name = [
        'contactName' => 'contact_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactName) {
            $res['contact_name'] = $this->contactName;
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
        if (isset($map['contact_name'])) {
            $model->contactName = $map['contact_name'];
        }

        return $model;
    }
}
