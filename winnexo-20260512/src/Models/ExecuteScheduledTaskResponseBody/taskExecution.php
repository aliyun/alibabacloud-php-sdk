<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ExecuteScheduledTaskResponseBody;

use AlibabaCloud\Dara\Model;

class taskExecution extends Model
{
    /**
     * @var string
     */
    public $autoPreference;

    /**
     * @var string
     */
    public $billingId;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var bool
     */
    public $enableWebSearch;

    /**
     * @var string
     */
    public $executionId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string[]
     */
    public $operatingObjectName;

    /**
     * @var string[]
     */
    public $skillCodes;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @var string
     */
    public $taskUnderstand;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'autoPreference' => 'autoPreference',
        'billingId' => 'billingId',
        'collaborationGroupId' => 'collaborationGroupId',
        'enableWebSearch' => 'enableWebSearch',
        'executionId' => 'executionId',
        'model' => 'model',
        'operatingObjectName' => 'operatingObjectName',
        'skillCodes' => 'skillCodes',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
        'taskUnderstand' => 'taskUnderstand',
        'tenantId' => 'tenantId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->operatingObjectName)) {
            Model::validateArray($this->operatingObjectName);
        }
        if (\is_array($this->skillCodes)) {
            Model::validateArray($this->skillCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPreference) {
            $res['autoPreference'] = $this->autoPreference;
        }

        if (null !== $this->billingId) {
            $res['billingId'] = $this->billingId;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->enableWebSearch) {
            $res['enableWebSearch'] = $this->enableWebSearch;
        }

        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->operatingObjectName) {
            if (\is_array($this->operatingObjectName)) {
                $res['operatingObjectName'] = [];
                $n1 = 0;
                foreach ($this->operatingObjectName as $item1) {
                    $res['operatingObjectName'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillCodes) {
            if (\is_array($this->skillCodes)) {
                $res['skillCodes'] = [];
                $n1 = 0;
                foreach ($this->skillCodes as $item1) {
                    $res['skillCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        if (null !== $this->taskUnderstand) {
            $res['taskUnderstand'] = $this->taskUnderstand;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['autoPreference'])) {
            $model->autoPreference = $map['autoPreference'];
        }

        if (isset($map['billingId'])) {
            $model->billingId = $map['billingId'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['enableWebSearch'])) {
            $model->enableWebSearch = $map['enableWebSearch'];
        }

        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['operatingObjectName'])) {
            if (!empty($map['operatingObjectName'])) {
                $model->operatingObjectName = [];
                $n1 = 0;
                foreach ($map['operatingObjectName'] as $item1) {
                    $model->operatingObjectName[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['skillCodes'])) {
            if (!empty($map['skillCodes'])) {
                $model->skillCodes = [];
                $n1 = 0;
                foreach ($map['skillCodes'] as $item1) {
                    $model->skillCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        if (isset($map['taskUnderstand'])) {
            $model->taskUnderstand = $map['taskUnderstand'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
