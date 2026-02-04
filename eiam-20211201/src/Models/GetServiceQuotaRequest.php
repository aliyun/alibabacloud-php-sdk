<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GetServiceQuotaRequest extends Model
{
    /**
     * @var string
     */
    public $quotaType;
    protected $_name = [
        'quotaType' => 'QuotaType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
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
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        return $model;
    }
}
