<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierRequest;

use AlibabaCloud\Tea\Model;

class payload extends Model
{
    /**
     * @example 731D5F********DC3B
     *
     * @var string
     */
    public $originUuid;
    protected $_name = [
        'originUuid' => 'originUuid',
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

        return $model;
    }
}
