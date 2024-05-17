<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesResponseBody\serviceItems;
use AlibabaCloud\Tea\Model;

class ListExternalDataServicesResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var serviceItems[]
     */
    public $serviceItems;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'requestId'        => 'RequestId',
        'serviceItems'     => 'ServiceItems',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceItems) {
            $res['ServiceItems'] = [];
            if (null !== $this->serviceItems && \is_array($this->serviceItems)) {
                $n = 0;
                foreach ($this->serviceItems as $item) {
                    $res['ServiceItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListExternalDataServicesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceItems'])) {
            if (!empty($map['ServiceItems'])) {
                $model->serviceItems = [];
                $n                   = 0;
                foreach ($map['ServiceItems'] as $item) {
                    $model->serviceItems[$n++] = null !== $item ? serviceItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
