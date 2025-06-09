<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class PolicyConfiguration extends Model
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
    protected $_name = [
        'actionPolicyId' => 'actionPolicyId',
        'alertPolicyId' => 'alertPolicyId',
        'repeatInterval' => 'repeatInterval',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        return $model;
    }
}
