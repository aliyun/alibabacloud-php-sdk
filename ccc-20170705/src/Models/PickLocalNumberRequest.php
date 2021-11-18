<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

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
        'calleeNumber'    => 'CalleeNumber',
        'candidateNumber' => 'CandidateNumber',
        'instanceId'      => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }
        if (null !== $this->candidateNumber) {
            $res['CandidateNumber'] = $this->candidateNumber;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PickLocalNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }
        if (isset($map['CandidateNumber'])) {
            if (!empty($map['CandidateNumber'])) {
                $model->candidateNumber = $map['CandidateNumber'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
