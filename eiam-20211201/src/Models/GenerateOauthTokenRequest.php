<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class GenerateOauthTokenRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $audience;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $scopeValues;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'audience' => 'Audience',
        'instanceId' => 'InstanceId',
        'scopeValues' => 'ScopeValues',
    ];

    public function validate()
    {
        if (\is_array($this->scopeValues)) {
            Model::validateArray($this->scopeValues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->audience) {
            $res['Audience'] = $this->audience;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->scopeValues) {
            if (\is_array($this->scopeValues)) {
                $res['ScopeValues'] = [];
                $n1 = 0;
                foreach ($this->scopeValues as $item1) {
                    $res['ScopeValues'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Audience'])) {
            $model->audience = $map['Audience'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ScopeValues'])) {
            if (!empty($map['ScopeValues'])) {
                $model->scopeValues = [];
                $n1 = 0;
                foreach ($map['ScopeValues'] as $item1) {
                    $model->scopeValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
