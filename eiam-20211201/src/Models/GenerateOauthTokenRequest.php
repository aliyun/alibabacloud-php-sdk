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
    public $grantType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $requestedTokenType;

    /**
     * @var string[]
     */
    public $scopeValues;

    /**
     * @var string
     */
    public $subjectToken;

    /**
     * @var string
     */
    public $subjectTokenType;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'audience' => 'Audience',
        'grantType' => 'GrantType',
        'instanceId' => 'InstanceId',
        'requestedTokenType' => 'RequestedTokenType',
        'scopeValues' => 'ScopeValues',
        'subjectToken' => 'SubjectToken',
        'subjectTokenType' => 'SubjectTokenType',
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

        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestedTokenType) {
            $res['RequestedTokenType'] = $this->requestedTokenType;
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

        if (null !== $this->subjectToken) {
            $res['SubjectToken'] = $this->subjectToken;
        }

        if (null !== $this->subjectTokenType) {
            $res['SubjectTokenType'] = $this->subjectTokenType;
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

        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestedTokenType'])) {
            $model->requestedTokenType = $map['RequestedTokenType'];
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

        if (isset($map['SubjectToken'])) {
            $model->subjectToken = $map['SubjectToken'];
        }

        if (isset($map['SubjectTokenType'])) {
            $model->subjectTokenType = $map['SubjectTokenType'];
        }

        return $model;
    }
}
