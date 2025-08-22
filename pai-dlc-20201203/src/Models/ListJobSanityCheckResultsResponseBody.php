<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ListJobSanityCheckResultsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestID;

    /**
     * @var SanityCheckResultItem[][]
     */
    public $sanityCheckResults;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestID' => 'RequestID',
        'sanityCheckResults' => 'SanityCheckResults',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sanityCheckResults)) {
            Model::validateArray($this->sanityCheckResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestID) {
            $res['RequestID'] = $this->requestID;
        }

        if (null !== $this->sanityCheckResults) {
            if (\is_array($this->sanityCheckResults)) {
                $res['SanityCheckResults'] = [];
                $n1 = 0;
                foreach ($this->sanityCheckResults as $item1) {
                    if (\is_array($item1)) {
                        $res['SanityCheckResults'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['SanityCheckResults'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestID'])) {
            $model->requestID = $map['RequestID'];
        }

        if (isset($map['SanityCheckResults'])) {
            if (!empty($map['SanityCheckResults'])) {
                $model->sanityCheckResults = [];
                $n1 = 0;
                foreach ($map['SanityCheckResults'] as $item1) {
                    if (!empty($item1)) {
                        $model->sanityCheckResults[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->sanityCheckResults[$n1][$n2] = SanityCheckResultItem::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
