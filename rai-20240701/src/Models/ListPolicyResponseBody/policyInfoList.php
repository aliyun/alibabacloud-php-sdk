<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RAI\V20240701\Models\ListPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class policyInfoList extends Model
{
    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $isSidecarPolicy;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyIdentifier;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var int
     */
    public $sceneType;
    protected $_name = [
        'gmtModified' => 'GmtModified',
        'isSidecarPolicy' => 'IsSidecarPolicy',
        'policyId' => 'PolicyId',
        'policyIdentifier' => 'PolicyIdentifier',
        'policyName' => 'PolicyName',
        'sceneType' => 'SceneType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->isSidecarPolicy) {
            $res['IsSidecarPolicy'] = $this->isSidecarPolicy;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyIdentifier) {
            $res['PolicyIdentifier'] = $this->policyIdentifier;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
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
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['IsSidecarPolicy'])) {
            $model->isSidecarPolicy = $map['IsSidecarPolicy'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyIdentifier'])) {
            $model->policyIdentifier = $map['PolicyIdentifier'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }

        return $model;
    }
}
