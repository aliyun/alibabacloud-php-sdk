<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class GetRiskNotificationRequest extends Model
{
    /**
     * @var string
     */
    public $riskCode;
    protected $_name = [
        'riskCode' => 'riskCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->riskCode) {
            $res['riskCode'] = $this->riskCode;
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
        if (isset($map['riskCode'])) {
            $model->riskCode = $map['riskCode'];
        }

        return $model;
    }
}
