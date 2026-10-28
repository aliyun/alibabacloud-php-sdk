<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CheckRecallManagementServiceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $contextParams;

    /**
     * @var string[]
     */
    public $exposureList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $recallManagementServiceVersionId;

    /**
     * @var mixed[]
     */
    public $recalls;

    /**
     * @var string[]
     */
    public $retainFields;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'contextParams' => 'ContextParams',
        'exposureList' => 'ExposureList',
        'instanceId' => 'InstanceId',
        'recallManagementServiceVersionId' => 'RecallManagementServiceVersionId',
        'recalls' => 'Recalls',
        'retainFields' => 'RetainFields',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        if (\is_array($this->contextParams)) {
            Model::validateArray($this->contextParams);
        }
        if (\is_array($this->exposureList)) {
            Model::validateArray($this->exposureList);
        }
        if (\is_array($this->recalls)) {
            Model::validateArray($this->recalls);
        }
        if (\is_array($this->retainFields)) {
            Model::validateArray($this->retainFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextParams) {
            if (\is_array($this->contextParams)) {
                $res['ContextParams'] = [];
                foreach ($this->contextParams as $key1 => $value1) {
                    $res['ContextParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->exposureList) {
            if (\is_array($this->exposureList)) {
                $res['ExposureList'] = [];
                $n1 = 0;
                foreach ($this->exposureList as $item1) {
                    $res['ExposureList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->recallManagementServiceVersionId) {
            $res['RecallManagementServiceVersionId'] = $this->recallManagementServiceVersionId;
        }

        if (null !== $this->recalls) {
            if (\is_array($this->recalls)) {
                $res['Recalls'] = [];
                foreach ($this->recalls as $key1 => $value1) {
                    $res['Recalls'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->retainFields) {
            if (\is_array($this->retainFields)) {
                $res['RetainFields'] = [];
                $n1 = 0;
                foreach ($this->retainFields as $item1) {
                    $res['RetainFields'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['ContextParams'])) {
            if (!empty($map['ContextParams'])) {
                $model->contextParams = [];
                foreach ($map['ContextParams'] as $key1 => $value1) {
                    $model->contextParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['ExposureList'])) {
            if (!empty($map['ExposureList'])) {
                $model->exposureList = [];
                $n1 = 0;
                foreach ($map['ExposureList'] as $item1) {
                    $model->exposureList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RecallManagementServiceVersionId'])) {
            $model->recallManagementServiceVersionId = $map['RecallManagementServiceVersionId'];
        }

        if (isset($map['Recalls'])) {
            if (!empty($map['Recalls'])) {
                $model->recalls = [];
                foreach ($map['Recalls'] as $key1 => $value1) {
                    $model->recalls[$key1] = $value1;
                }
            }
        }

        if (isset($map['RetainFields'])) {
            if (!empty($map['RetainFields'])) {
                $model->retainFields = [];
                $n1 = 0;
                foreach ($map['RetainFields'] as $item1) {
                    $model->retainFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
