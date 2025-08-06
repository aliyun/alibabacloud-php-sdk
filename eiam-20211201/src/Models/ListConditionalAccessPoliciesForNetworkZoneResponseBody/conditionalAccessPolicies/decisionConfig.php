<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListConditionalAccessPoliciesForNetworkZoneResponseBody\conditionalAccessPolicies;

use AlibabaCloud\Dara\Model;

class decisionConfig extends Model
{
    /**
     * @var string
     */
    public $activeSessionReuseStatus;

    /**
     * @var string
     */
    public $effect;

    /**
     * @var int
     */
    public $mfaAuthenticationIntervalSeconds;

    /**
     * @var string[]
     */
    public $mfaAuthenticationMethods;

    /**
     * @var string
     */
    public $mfaType;
    protected $_name = [
        'activeSessionReuseStatus' => 'ActiveSessionReuseStatus',
        'effect' => 'Effect',
        'mfaAuthenticationIntervalSeconds' => 'MfaAuthenticationIntervalSeconds',
        'mfaAuthenticationMethods' => 'MfaAuthenticationMethods',
        'mfaType' => 'MfaType',
    ];

    public function validate()
    {
        if (\is_array($this->mfaAuthenticationMethods)) {
            Model::validateArray($this->mfaAuthenticationMethods);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeSessionReuseStatus) {
            $res['ActiveSessionReuseStatus'] = $this->activeSessionReuseStatus;
        }

        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }

        if (null !== $this->mfaAuthenticationIntervalSeconds) {
            $res['MfaAuthenticationIntervalSeconds'] = $this->mfaAuthenticationIntervalSeconds;
        }

        if (null !== $this->mfaAuthenticationMethods) {
            if (\is_array($this->mfaAuthenticationMethods)) {
                $res['MfaAuthenticationMethods'] = [];
                $n1 = 0;
                foreach ($this->mfaAuthenticationMethods as $item1) {
                    $res['MfaAuthenticationMethods'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mfaType) {
            $res['MfaType'] = $this->mfaType;
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
        if (isset($map['ActiveSessionReuseStatus'])) {
            $model->activeSessionReuseStatus = $map['ActiveSessionReuseStatus'];
        }

        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }

        if (isset($map['MfaAuthenticationIntervalSeconds'])) {
            $model->mfaAuthenticationIntervalSeconds = $map['MfaAuthenticationIntervalSeconds'];
        }

        if (isset($map['MfaAuthenticationMethods'])) {
            if (!empty($map['MfaAuthenticationMethods'])) {
                $model->mfaAuthenticationMethods = [];
                $n1 = 0;
                foreach ($map['MfaAuthenticationMethods'] as $item1) {
                    $model->mfaAuthenticationMethods[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MfaType'])) {
            $model->mfaType = $map['MfaType'];
        }

        return $model;
    }
}
