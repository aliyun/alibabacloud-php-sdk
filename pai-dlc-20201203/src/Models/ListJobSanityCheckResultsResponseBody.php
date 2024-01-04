<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListJobSanityCheckResultsResponseBody extends Model
{
    /**
     * @example 1AC9xxx-3xxx-5xxx2-xxxx-FA5
     *
     * @var string
     */
    public $requestID;

    /**
     * @var SanityCheckResultItem[][]
     */
    public $sanityCheckResults;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestID'          => 'RequestID',
        'sanityCheckResults' => 'SanityCheckResults',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestID) {
            $res['RequestID'] = $this->requestID;
        }
        if (null !== $this->sanityCheckResults) {
            $res['SanityCheckResults'] = $this->sanityCheckResults;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobSanityCheckResultsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestID'])) {
            $model->requestID = $map['RequestID'];
        }
        if (isset($map['SanityCheckResults'])) {
            if (!empty($map['SanityCheckResults'])) {
                $model->sanityCheckResults = $map['SanityCheckResults'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
