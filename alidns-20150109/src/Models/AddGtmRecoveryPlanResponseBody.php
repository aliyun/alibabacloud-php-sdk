<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddGtmRecoveryPlanResponseBody extends Model
{
    /**
     * @description The ID of the disaster recovery plan created.
     *
     * @example 100
     *
     * @var string
     */
    public $recoveryPlanId;

    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recoveryPlanId' => 'RecoveryPlanId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGtmRecoveryPlanResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
