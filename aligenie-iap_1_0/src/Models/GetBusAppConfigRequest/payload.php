<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetBusAppConfigRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 731D5F********DC3B
     *
     * @var string
     */
    public $originUuid;

    /**
     * @example 136****1111
     *
     * @var string
     */
    public $phone;
    protected $_name = [
        'originUuid' => 'originUuid',
        'phone'      => 'phone',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return payload
     */
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
