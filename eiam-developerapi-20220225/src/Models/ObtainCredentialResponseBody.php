<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\ObtainCredentialResponseBody\credentialContent;

class ObtainCredentialResponseBody extends Model
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
        'createTime' => 'createTime',
        'credentialContent' => 'credentialContent',
        'credentialCreationType' => 'credentialCreationType',
        'credentialId' => 'credentialId',
        'credentialIdentifier' => 'credentialIdentifier',
        'credentialName' => 'credentialName',
        'credentialScenarioLabel' => 'credentialScenarioLabel',
        'credentialSubjectId' => 'credentialSubjectId',
        'credentialSubjectType' => 'credentialSubjectType',
        'credentialType' => 'credentialType',
        'description' => 'description',
        'instanceId' => 'instanceId',
        'status' => 'status',
        'updateTime' => 'updateTime',
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
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->credentialContent) {
            $res['credentialContent'] = null !== $this->credentialContent ? $this->credentialContent->toArray($noStream) : $this->credentialContent;
        }

        if (null !== $this->credentialCreationType) {
            $res['credentialCreationType'] = $this->credentialCreationType;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialIdentifier) {
            $res['credentialIdentifier'] = $this->credentialIdentifier;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->credentialScenarioLabel) {
            $res['credentialScenarioLabel'] = $this->credentialScenarioLabel;
        }

        if (null !== $this->credentialSubjectId) {
            $res['credentialSubjectId'] = $this->credentialSubjectId;
        }

        if (null !== $this->credentialSubjectType) {
            $res['credentialSubjectType'] = $this->credentialSubjectType;
        }

        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['credentialContent'])) {
            $model->credentialContent = credentialContent::fromMap($map['credentialContent']);
        }

        if (isset($map['credentialCreationType'])) {
            $model->credentialCreationType = $map['credentialCreationType'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['credentialIdentifier'])) {
            $model->credentialIdentifier = $map['credentialIdentifier'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['credentialScenarioLabel'])) {
            $model->credentialScenarioLabel = $map['credentialScenarioLabel'];
        }

        if (isset($map['credentialSubjectId'])) {
            $model->credentialSubjectId = $map['credentialSubjectId'];
        }

        if (isset($map['credentialSubjectType'])) {
            $model->credentialSubjectType = $map['credentialSubjectType'];
        }

        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
