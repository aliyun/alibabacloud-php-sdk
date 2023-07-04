<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody\crossAccountAuthorizations;
use AlibabaCloud\Tea\Model;

class DescribeVpnCrossAccountAuthorizationsResponseBody extends Model
{
    /**
     * @description The cross-account authorization information about the IPsec-VPN connection.
     *
     * @var crossAccountAuthorizations[]
     */
    public $crossAccountAuthorizations;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example DB04E39A-6F0C-36AC-BCA0-B6D371B90062
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 1
     *
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
