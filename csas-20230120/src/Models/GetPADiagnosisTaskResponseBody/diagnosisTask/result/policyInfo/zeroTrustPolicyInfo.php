<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\policyInfo;

use AlibabaCloud\Dara\Model;

class zeroTrustPolicyInfo extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $blockInfo;

    /**
     * @var string
     */
    public $policyName;
    protected $_name = [
        'action' => 'Action',
        'appName' => 'AppName',
        'blockInfo' => 'BlockInfo',
        'policyName' => 'PolicyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->blockInfo) {
            $res['BlockInfo'] = $this->blockInfo;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['BlockInfo'])) {
            $model->blockInfo = $map['BlockInfo'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        return $model;
    }
}
