<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;

class DescribeCandidateInstanceTypeResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $candidateInstanceTypes;

    /**
     * @var string[]
     */
    public $candidateZoneIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'candidateInstanceTypes' => 'CandidateInstanceTypes',
        'candidateZoneIds' => 'CandidateZoneIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->candidateInstanceTypes)) {
            Model::validateArray($this->candidateInstanceTypes);
        }
        if (\is_array($this->candidateZoneIds)) {
            Model::validateArray($this->candidateZoneIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidateInstanceTypes) {
            if (\is_array($this->candidateInstanceTypes)) {
                $res['CandidateInstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->candidateInstanceTypes as $item1) {
                    $res['CandidateInstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->candidateZoneIds) {
            if (\is_array($this->candidateZoneIds)) {
                $res['CandidateZoneIds'] = [];
                $n1 = 0;
                foreach ($this->candidateZoneIds as $item1) {
                    $res['CandidateZoneIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CandidateInstanceTypes'])) {
            if (!empty($map['CandidateInstanceTypes'])) {
                $model->candidateInstanceTypes = [];
                $n1 = 0;
                foreach ($map['CandidateInstanceTypes'] as $item1) {
                    $model->candidateInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CandidateZoneIds'])) {
            if (!empty($map['CandidateZoneIds'])) {
                $model->candidateZoneIds = [];
                $n1 = 0;
                foreach ($map['CandidateZoneIds'] as $item1) {
                    $model->candidateZoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
