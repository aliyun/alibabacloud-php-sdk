<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\Configuration;

use AlibabaCloud\Tea\Model;

class policyConfiguration extends Model
{
    /**
     * @var string
     */
    public $actionPolicyId;

    /**
     * @var string
     */
    public $alertPolicyId;

    /**
     * @var string
     */
    public $repeatInterval;

    /**
     * @var bool
     */
    public $useDefault;
    protected $_name = [
        'actionPolicyId' => 'actionPolicyId',
        'alertPolicyId'  => 'alertPolicyId',
        'repeatInterval' => 'repeatInterval',
        'useDefault'     => 'useDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPolicyId) {
            $res['actionPolicyId'] = $this->actionPolicyId;
        }
        if (null !== $this->alertPolicyId) {
            $res['alertPolicyId'] = $this->alertPolicyId;
        }
        if (null !== $this->repeatInterval) {
            $res['repeatInterval'] = $this->repeatInterval;
        }
        if (null !== $this->useDefault) {
            $res['useDefault'] = $this->useDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionPolicyId'])) {
            $model->actionPolicyId = $map['actionPolicyId'];
        }
        if (isset($map['alertPolicyId'])) {
            $model->alertPolicyId = $map['alertPolicyId'];
        }
        if (isset($map['repeatInterval'])) {
            $model->repeatInterval = $map['repeatInterval'];
        }
        if (isset($map['useDefault'])) {
            $model->useDefault = $map['useDefault'];
        }

        return $model;
    }
}
