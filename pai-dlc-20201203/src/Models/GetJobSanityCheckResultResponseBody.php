<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetJobSanityCheckResultResponseBody extends Model
{
    /**
     * @example dlc-20210126170216-xxxxxx
     *
     * @var string
     */
    public $jobId;

    /**
     * @example B3789344-F1xxxBE-5xx2-A04D-xxxxx
     *
     * @var string
     */
    public $requestID;

    /**
     * @var SanityCheckResultItem[]
     */
    public $sanityCheckResult;
    protected $_name = [
        'jobId'             => 'JobId',
        'requestID'         => 'RequestID',
        'sanityCheckResult' => 'SanityCheckResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestID) {
            $res['RequestID'] = $this->requestID;
        }
        if (null !== $this->sanityCheckResult) {
            $res['SanityCheckResult'] = [];
            if (null !== $this->sanityCheckResult && \is_array($this->sanityCheckResult)) {
                $n = 0;
                foreach ($this->sanityCheckResult as $item) {
                    $res['SanityCheckResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobSanityCheckResultResponseBody
     */
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
                $n                        = 0;
                foreach ($map['SanityCheckResult'] as $item) {
                    $model->sanityCheckResult[$n++] = null !== $item ? SanityCheckResultItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
