<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class GetResourceOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $gatewayType;
    protected $_name = [
        'gatewayType' => 'gatewayType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceOverviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
        }

        return $model;
    }
}
