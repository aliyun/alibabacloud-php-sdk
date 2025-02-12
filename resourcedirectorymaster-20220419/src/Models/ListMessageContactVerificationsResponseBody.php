<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListMessageContactVerificationsResponseBody\contactVerifications;

class ListMessageContactVerificationsResponseBody extends Model
{
    /**
     * @var contactVerifications[]
     */
    public $contactVerifications;
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
        'contactVerifications' => 'ContactVerifications',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'totalCount'           => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->contactVerifications)) {
            Model::validateArray($this->contactVerifications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactVerifications) {
            if (\is_array($this->contactVerifications)) {
                $res['ContactVerifications'] = [];
                $n1                          = 0;
                foreach ($this->contactVerifications as $item1) {
                    $res['ContactVerifications'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ContactVerifications'])) {
            if (!empty($map['ContactVerifications'])) {
                $model->contactVerifications = [];
                $n1                          = 0;
                foreach ($map['ContactVerifications'] as $item1) {
                    $model->contactVerifications[$n1++] = contactVerifications::fromMap($item1);
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
