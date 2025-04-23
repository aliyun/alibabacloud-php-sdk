<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetRamPolicyExportTaskVersionResponseBody;

use AlibabaCloud\Dara\Model;

class ramPolicyExportTaskVersion extends Model
{
    /**
     * @var int[]
     */
    public $authorizationAccountIds;

    /**
     * @var string[]
     */
    public $authorizationActions;

    /**
     * @var string[]
     */
    public $authorizationRegionIds;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var string
     */
    public $exportVersion;

    /**
     * @var string
     */
    public $failedReason;

    /**
     * @var string[]
     */
    public $missingActions;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string[]
     */
    public $noSupportResourceTypes;

    /**
     * @var string
     */
    public $policyDocument;

    /**
     * @var string
     */
    public $ramPolicyExportTaskId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $terraformProviderVersion;

    /**
     * @var string[]
     */
    public $unauthorizedActions;

    /**
     * @var string
     */
    public $warnMessage;
    protected $_name = [
        'authorizationAccountIds' => 'authorizationAccountIds',
        'authorizationActions' => 'authorizationActions',
        'authorizationRegionIds' => 'authorizationRegionIds',
        'createTime' => 'createTime',
        'elapsedTime' => 'elapsedTime',
        'exportVersion' => 'exportVersion',
        'failedReason' => 'failedReason',
        'missingActions' => 'missingActions',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'noSupportResourceTypes' => 'noSupportResourceTypes',
        'policyDocument' => 'policyDocument',
        'ramPolicyExportTaskId' => 'ramPolicyExportTaskId',
        'status' => 'status',
        'terraformProviderVersion' => 'terraformProviderVersion',
        'unauthorizedActions' => 'unauthorizedActions',
        'warnMessage' => 'warnMessage',
    ];

    public function validate()
    {
        if (\is_array($this->authorizationAccountIds)) {
            Model::validateArray($this->authorizationAccountIds);
        }
        if (\is_array($this->authorizationActions)) {
            Model::validateArray($this->authorizationActions);
        }
        if (\is_array($this->authorizationRegionIds)) {
            Model::validateArray($this->authorizationRegionIds);
        }
        if (\is_array($this->missingActions)) {
            Model::validateArray($this->missingActions);
        }
        if (\is_array($this->noSupportResourceTypes)) {
            Model::validateArray($this->noSupportResourceTypes);
        }
        if (\is_array($this->unauthorizedActions)) {
            Model::validateArray($this->unauthorizedActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizationAccountIds) {
            if (\is_array($this->authorizationAccountIds)) {
                $res['authorizationAccountIds'] = [];
                $n1 = 0;
                foreach ($this->authorizationAccountIds as $item1) {
                    $res['authorizationAccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authorizationActions) {
            if (\is_array($this->authorizationActions)) {
                $res['authorizationActions'] = [];
                $n1 = 0;
                foreach ($this->authorizationActions as $item1) {
                    $res['authorizationActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->authorizationRegionIds) {
            if (\is_array($this->authorizationRegionIds)) {
                $res['authorizationRegionIds'] = [];
                $n1 = 0;
                foreach ($this->authorizationRegionIds as $item1) {
                    $res['authorizationRegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->elapsedTime) {
            $res['elapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->exportVersion) {
            $res['exportVersion'] = $this->exportVersion;
        }

        if (null !== $this->failedReason) {
            $res['failedReason'] = $this->failedReason;
        }

        if (null !== $this->missingActions) {
            if (\is_array($this->missingActions)) {
                $res['missingActions'] = [];
                $n1 = 0;
                foreach ($this->missingActions as $item1) {
                    $res['missingActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->noSupportResourceTypes) {
            if (\is_array($this->noSupportResourceTypes)) {
                $res['noSupportResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->noSupportResourceTypes as $item1) {
                    $res['noSupportResourceTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->policyDocument) {
            $res['policyDocument'] = $this->policyDocument;
        }

        if (null !== $this->ramPolicyExportTaskId) {
            $res['ramPolicyExportTaskId'] = $this->ramPolicyExportTaskId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->terraformProviderVersion) {
            $res['terraformProviderVersion'] = $this->terraformProviderVersion;
        }

        if (null !== $this->unauthorizedActions) {
            if (\is_array($this->unauthorizedActions)) {
                $res['unauthorizedActions'] = [];
                $n1 = 0;
                foreach ($this->unauthorizedActions as $item1) {
                    $res['unauthorizedActions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->warnMessage) {
            $res['warnMessage'] = $this->warnMessage;
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
        if (isset($map['authorizationAccountIds'])) {
            if (!empty($map['authorizationAccountIds'])) {
                $model->authorizationAccountIds = [];
                $n1 = 0;
                foreach ($map['authorizationAccountIds'] as $item1) {
                    $model->authorizationAccountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['authorizationActions'])) {
            if (!empty($map['authorizationActions'])) {
                $model->authorizationActions = [];
                $n1 = 0;
                foreach ($map['authorizationActions'] as $item1) {
                    $model->authorizationActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['authorizationRegionIds'])) {
            if (!empty($map['authorizationRegionIds'])) {
                $model->authorizationRegionIds = [];
                $n1 = 0;
                foreach ($map['authorizationRegionIds'] as $item1) {
                    $model->authorizationRegionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['elapsedTime'])) {
            $model->elapsedTime = $map['elapsedTime'];
        }

        if (isset($map['exportVersion'])) {
            $model->exportVersion = $map['exportVersion'];
        }

        if (isset($map['failedReason'])) {
            $model->failedReason = $map['failedReason'];
        }

        if (isset($map['missingActions'])) {
            if (!empty($map['missingActions'])) {
                $model->missingActions = [];
                $n1 = 0;
                foreach ($map['missingActions'] as $item1) {
                    $model->missingActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['noSupportResourceTypes'])) {
            if (!empty($map['noSupportResourceTypes'])) {
                $model->noSupportResourceTypes = [];
                $n1 = 0;
                foreach ($map['noSupportResourceTypes'] as $item1) {
                    $model->noSupportResourceTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['policyDocument'])) {
            $model->policyDocument = $map['policyDocument'];
        }

        if (isset($map['ramPolicyExportTaskId'])) {
            $model->ramPolicyExportTaskId = $map['ramPolicyExportTaskId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['terraformProviderVersion'])) {
            $model->terraformProviderVersion = $map['terraformProviderVersion'];
        }

        if (isset($map['unauthorizedActions'])) {
            if (!empty($map['unauthorizedActions'])) {
                $model->unauthorizedActions = [];
                $n1 = 0;
                foreach ($map['unauthorizedActions'] as $item1) {
                    $model->unauthorizedActions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['warnMessage'])) {
            $model->warnMessage = $map['warnMessage'];
        }

        return $model;
    }
}
