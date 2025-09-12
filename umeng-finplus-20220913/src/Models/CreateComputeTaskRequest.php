<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20220913\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Umengfinplus\V20220913\Models\CreateComputeTaskRequest\morseInfoList;

class CreateComputeTaskRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $dataSetIds;

    /**
     * @var morseInfoList[]
     */
    public $morseInfoList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'appId' => 'appId',
        'dataSetIds' => 'dataSetIds',
        'morseInfoList' => 'morseInfoList',
        'name' => 'name',
        'remarks' => 'remarks',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->morseInfoList)) {
            Model::validateArray($this->morseInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->dataSetIds) {
            $res['dataSetIds'] = $this->dataSetIds;
        }

        if (null !== $this->morseInfoList) {
            if (\is_array($this->morseInfoList)) {
                $res['morseInfoList'] = [];
                $n1 = 0;
                foreach ($this->morseInfoList as $item1) {
                    $res['morseInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['dataSetIds'])) {
            $model->dataSetIds = $map['dataSetIds'];
        }

        if (isset($map['morseInfoList'])) {
            if (!empty($map['morseInfoList'])) {
                $model->morseInfoList = [];
                $n1 = 0;
                foreach ($map['morseInfoList'] as $item1) {
                    $model->morseInfoList[$n1] = morseInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
