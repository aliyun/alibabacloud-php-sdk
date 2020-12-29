<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DeleteGtmRecoveryPlanRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var int
     */
    public $recoveryPlanId;
    protected $_name = [
        'lang'           => 'Lang',
        'userClientIp'   => 'UserClientIp',
        'recoveryPlanId' => 'RecoveryPlanId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteGtmRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }

        return $model;
    }
}
