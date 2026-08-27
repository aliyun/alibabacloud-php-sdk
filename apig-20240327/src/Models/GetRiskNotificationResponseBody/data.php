<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetRiskNotificationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var bool
     */
    public $isMute;

    /**
     * @var string
     */
    public $riskCode;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'isMute' => 'isMute',
        'riskCode' => 'riskCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->isMute) {
            $res['isMute'] = $this->isMute;
        }

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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['isMute'])) {
            $model->isMute = $map['isMute'];
        }

        if (isset($map['riskCode'])) {
            $model->riskCode = $map['riskCode'];
        }

        return $model;
    }
}
