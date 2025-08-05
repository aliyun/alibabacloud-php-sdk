<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetResourceOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayType;
    protected $_name = [
        'gatewayType' => 'gatewayType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
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
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        return $model;
    }
}
