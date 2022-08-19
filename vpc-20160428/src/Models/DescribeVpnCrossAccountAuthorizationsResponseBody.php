<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody\crossAccountAuthorizations;
use AlibabaCloud\Tea\Model;

class DescribeVpnCrossAccountAuthorizationsResponseBody extends Model
{
    /**
     * @var crossAccountAuthorizations[]
     */
    public $crossAccountAuthorizations;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'crossAccountAuthorizations' => 'CrossAccountAuthorizations',
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'requestId'                  => 'RequestId',
        'totalCount'                 => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossAccountAuthorizations) {
            $res['CrossAccountAuthorizations'] = [];
            if (null !== $this->crossAccountAuthorizations && \is_array($this->crossAccountAuthorizations)) {
                $n = 0;
                foreach ($this->crossAccountAuthorizations as $item) {
                    $res['CrossAccountAuthorizations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnCrossAccountAuthorizationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountAuthorizations'])) {
            if (!empty($map['CrossAccountAuthorizations'])) {
                $model->crossAccountAuthorizations = [];
                $n                                 = 0;
                foreach ($map['CrossAccountAuthorizations'] as $item) {
                    $model->crossAccountAuthorizations[$n++] = null !== $item ? crossAccountAuthorizations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
