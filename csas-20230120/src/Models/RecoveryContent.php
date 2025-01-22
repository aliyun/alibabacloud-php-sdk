<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class RecoveryContent extends Model
{
    /**
     * @var AuthReportInterval
     */
    public $authReportInterval;
    /**
     * @var string[]
     */
    public $recoveryActions;
    protected $_name = [
        'authReportInterval' => 'AuthReportInterval',
        'recoveryActions'    => 'RecoveryActions',
    ];

    public function validate()
    {
        if (null !== $this->authReportInterval) {
            $this->authReportInterval->validate();
        }
        if (\is_array($this->recoveryActions)) {
            Model::validateArray($this->recoveryActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authReportInterval) {
            $res['AuthReportInterval'] = null !== $this->authReportInterval ? $this->authReportInterval->toArray($noStream) : $this->authReportInterval;
        }

        if (null !== $this->recoveryActions) {
            if (\is_array($this->recoveryActions)) {
                $res['RecoveryActions'] = [];
                $n1                     = 0;
                foreach ($this->recoveryActions as $item1) {
                    $res['RecoveryActions'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AuthReportInterval'])) {
            $model->authReportInterval = AuthReportInterval::fromMap($map['AuthReportInterval']);
        }

        if (isset($map['RecoveryActions'])) {
            if (!empty($map['RecoveryActions'])) {
                $model->recoveryActions = [];
                $n1                     = 0;
                foreach ($map['RecoveryActions'] as $item1) {
                    $model->recoveryActions[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
