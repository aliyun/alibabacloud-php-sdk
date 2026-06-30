<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListModelOperatorServicesResponseBody;

use AlibabaCloud\Dara\Model;

class services extends Model
{
    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'serviceId' => 'ServiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
