<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class PickLocalNumberRequest extends Model
{
    /**
     * @var string
     */
    public $calleeNumber;

    /**
     * @var string[]
     */
    public $candidateNumber;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'calleeNumber' => 'CalleeNumber',
        'candidateNumber' => 'CandidateNumber',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->candidateNumber)) {
            Model::validateArray($this->candidateNumber);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }

        if (null !== $this->candidateNumber) {
            if (\is_array($this->candidateNumber)) {
                $res['CandidateNumber'] = [];
                $n1 = 0;
                foreach ($this->candidateNumber as $item1) {
                    $res['CandidateNumber'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }

        if (isset($map['CandidateNumber'])) {
            if (!empty($map['CandidateNumber'])) {
                $model->candidateNumber = [];
                $n1 = 0;
                foreach ($map['CandidateNumber'] as $item1) {
                    $model->candidateNumber[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
