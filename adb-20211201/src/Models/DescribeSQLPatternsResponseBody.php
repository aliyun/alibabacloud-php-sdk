<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSQLPatternsResponseBody\patternDetails;

class DescribeSQLPatternsResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var patternDetails[]
     */
    public $patternDetails;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'patternDetails'     => 'PatternDetails',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->patternDetails)) {
            Model::validateArray($this->patternDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->patternDetails) {
            if (\is_array($this->patternDetails)) {
                $res['PatternDetails'] = [];
                $n1                    = 0;
                foreach ($this->patternDetails as $item1) {
                    $res['PatternDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PatternDetails'])) {
            if (!empty($map['PatternDetails'])) {
                $model->patternDetails = [];
                $n1                    = 0;
                foreach ($map['PatternDetails'] as $item1) {
                    $model->patternDetails[$n1++] = patternDetails::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
