<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcePackageQuotaResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'usedCount'  => 'UsedCount',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('usedCount', $this->usedCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePackageQuotaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
