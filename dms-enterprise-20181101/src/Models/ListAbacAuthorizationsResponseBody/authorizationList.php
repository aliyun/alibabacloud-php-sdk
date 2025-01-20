<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAbacAuthorizationsResponseBody;

use AlibabaCloud\Dara\Model;

class authorizationList extends Model
{
    /**
     * @var int
     */
    public $authorizationId;
    /**
     * @var int
     */
    public $identityId;
    /**
     * @var string
     */
    public $identityName;
    /**
     * @var string
     */
    public $identityType;
    /**
     * @var int
     */
    public $policyId;
    /**
     * @var string
     */
    public $policyName;
    /**
     * @var string
     */
    public $policySource;
    protected $_name = [
        'authorizationId' => 'AuthorizationId',
        'identityId'      => 'IdentityId',
        'identityName'    => 'IdentityName',
        'identityType'    => 'IdentityType',
        'policyId'        => 'PolicyId',
        'policyName'      => 'PolicyName',
        'policySource'    => 'PolicySource',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['AuthorizationId'] = $this->authorizationId;
        }

        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }

        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }

        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->policySource) {
            $res['PolicySource'] = $this->policySource;
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
        if (isset($map['AuthorizationId'])) {
            $model->authorizationId = $map['AuthorizationId'];
        }

        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }

        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }

        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['PolicySource'])) {
            $model->policySource = $map['PolicySource'];
        }

        return $model;
    }
}
