<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class PickOutboundNumbersRequest extends Model
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
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'calleeNumber'    => 'CalleeNumber',
        'candidateNumber' => 'CandidateNumber',
        'count'           => 'Count',
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
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PickOutboundNumbersRequest
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
