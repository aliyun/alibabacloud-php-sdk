<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;

class taskExecution extends Model
{
    /**
     * @var string
     */
    public $billingId;

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
        'billingId' => 'billingId',
        'enableWebSearch' => 'enableWebSearch',
        'executionId' => 'executionId',
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
        if (\is_array($this->skillCodes)) {
            Model::validateArray($this->skillCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingId) {
            $res['billingId'] = $this->billingId;
        }

        if (null !== $this->enableWebSearch) {
            $res['enableWebSearch'] = $this->enableWebSearch;
        }

        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
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
        if (isset($map['billingId'])) {
            $model->billingId = $map['billingId'];
        }

        if (isset($map['enableWebSearch'])) {
            $model->enableWebSearch = $map['enableWebSearch'];
        }

        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
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
