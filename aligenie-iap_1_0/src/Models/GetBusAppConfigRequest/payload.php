<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var string
     */
    public $originUuid;

    /**
     * @var string
     */
    public $phone;
    protected $_name = [
        'originUuid' => 'originUuid',
        'phone' => 'phone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originUuid) {
            $res['originUuid'] = $this->originUuid;
        }

        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
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
        if (isset($map['originUuid'])) {
            $model->originUuid = $map['originUuid'];
        }

        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }

        return $model;
    }
}
