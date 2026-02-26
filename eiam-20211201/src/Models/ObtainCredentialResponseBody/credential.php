<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ObtainCredentialResponseBody\credential\credentialContent;

class credential extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var credentialContent
     */
    public $credentialContent;

    /**
     * @var string
     */
    public $credentialCreationType;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialIdentifier;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $credentialScenarioLabel;

    /**
     * @var string
     */
    public $credentialSubjectId;

    /**
     * @var string
     */
    public $credentialSubjectType;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'credentialContent' => 'CredentialContent',
        'credentialCreationType' => 'CredentialCreationType',
        'credentialId' => 'CredentialId',
        'credentialIdentifier' => 'CredentialIdentifier',
        'credentialName' => 'CredentialName',
        'credentialScenarioLabel' => 'CredentialScenarioLabel',
        'credentialSubjectId' => 'CredentialSubjectId',
        'credentialSubjectType' => 'CredentialSubjectType',
        'credentialType' => 'CredentialType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->credentialContent) {
            $this->credentialContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->credentialContent) {
            $res['CredentialContent'] = null !== $this->credentialContent ? $this->credentialContent->toArray($noStream) : $this->credentialContent;
        }

        if (null !== $this->credentialCreationType) {
            $res['CredentialCreationType'] = $this->credentialCreationType;
        }

        if (null !== $this->credentialId) {
            $res['CredentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialIdentifier) {
            $res['CredentialIdentifier'] = $this->credentialIdentifier;
        }

        if (null !== $this->credentialName) {
            $res['CredentialName'] = $this->credentialName;
        }

        if (null !== $this->credentialScenarioLabel) {
            $res['CredentialScenarioLabel'] = $this->credentialScenarioLabel;
        }

        if (null !== $this->credentialSubjectId) {
            $res['CredentialSubjectId'] = $this->credentialSubjectId;
        }

        if (null !== $this->credentialSubjectType) {
            $res['CredentialSubjectType'] = $this->credentialSubjectType;
        }

        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CredentialContent'])) {
            $model->credentialContent = credentialContent::fromMap($map['CredentialContent']);
        }

        if (isset($map['CredentialCreationType'])) {
            $model->credentialCreationType = $map['CredentialCreationType'];
        }

        if (isset($map['CredentialId'])) {
            $model->credentialId = $map['CredentialId'];
        }

        if (isset($map['CredentialIdentifier'])) {
            $model->credentialIdentifier = $map['CredentialIdentifier'];
        }

        if (isset($map['CredentialName'])) {
            $model->credentialName = $map['CredentialName'];
        }

        if (isset($map['CredentialScenarioLabel'])) {
            $model->credentialScenarioLabel = $map['CredentialScenarioLabel'];
        }

        if (isset($map['CredentialSubjectId'])) {
            $model->credentialSubjectId = $map['CredentialSubjectId'];
        }

        if (isset($map['CredentialSubjectType'])) {
            $model->credentialSubjectType = $map['CredentialSubjectType'];
        }

        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
