<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnCrossAccountAuthorizationsResponseBody\crossAccountAuthorizations;

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
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->crossAccountAuthorizations)) {
            Model::validateArray($this->crossAccountAuthorizations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->crossAccountAuthorizations) {
            if (\is_array($this->crossAccountAuthorizations)) {
                $res['CrossAccountAuthorizations'] = [];
                $n1 = 0;
                foreach ($this->crossAccountAuthorizations as $item1) {
                    $res['CrossAccountAuthorizations'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountAuthorizations'])) {
            if (!empty($map['CrossAccountAuthorizations'])) {
                $model->crossAccountAuthorizations = [];
                $n1 = 0;
                foreach ($map['CrossAccountAuthorizations'] as $item1) {
                    $model->crossAccountAuthorizations[$n1++] = crossAccountAuthorizations::fromMap($item1);
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
