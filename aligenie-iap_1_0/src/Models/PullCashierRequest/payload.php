<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PullCashierRequest;

use AlibabaCloud\Dara\Model;

class payload extends Model
{
    /**
     * @var string
     */
    public $originUuid;
    protected $_name = [
        'originUuid' => 'originUuid',
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

        return $model;
    }
}
