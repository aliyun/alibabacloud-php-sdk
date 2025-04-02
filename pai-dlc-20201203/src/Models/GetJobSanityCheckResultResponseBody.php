<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetJobSanityCheckResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $requestID;

    /**
     * @var SanityCheckResultItem[]
     */
    public $sanityCheckResult;
    protected $_name = [
        'jobId' => 'JobId',
        'requestID' => 'RequestID',
        'sanityCheckResult' => 'SanityCheckResult',
    ];

    public function validate()
    {
        if (\is_array($this->sanityCheckResult)) {
            Model::validateArray($this->sanityCheckResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->requestID) {
            $res['RequestID'] = $this->requestID;
        }

        if (null !== $this->sanityCheckResult) {
            if (\is_array($this->sanityCheckResult)) {
                $res['SanityCheckResult'] = [];
                $n1 = 0;
                foreach ($this->sanityCheckResult as $item1) {
                    $res['SanityCheckResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RequestID'])) {
            $model->requestID = $map['RequestID'];
        }

        if (isset($map['SanityCheckResult'])) {
            if (!empty($map['SanityCheckResult'])) {
                $model->sanityCheckResult = [];
                $n1 = 0;
                foreach ($map['SanityCheckResult'] as $item1) {
                    $model->sanityCheckResult[$n1++] = SanityCheckResultItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
