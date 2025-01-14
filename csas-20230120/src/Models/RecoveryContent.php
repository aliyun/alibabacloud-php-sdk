<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class RecoveryContent extends Model
{
    /**
     * @var AuthReportInterval
     */
    public $authReportInterval;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $recoveryActions;
    protected $_name = [
        'authReportInterval' => 'AuthReportInterval',
        'recoveryActions'    => 'RecoveryActions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authReportInterval) {
            $res['AuthReportInterval'] = null !== $this->authReportInterval ? $this->authReportInterval->toMap() : null;
        }
        if (null !== $this->recoveryActions) {
            $res['RecoveryActions'] = $this->recoveryActions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecoveryContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthReportInterval'])) {
            $model->authReportInterval = AuthReportInterval::fromMap($map['AuthReportInterval']);
        }
        if (isset($map['RecoveryActions'])) {
            if (!empty($map['RecoveryActions'])) {
                $model->recoveryActions = $map['RecoveryActions'];
            }
        }

        return $model;
    }
}
