<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListExternalDataServicesResponseBody\serviceItems;

class ListExternalDataServicesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var serviceItems[]
     */
    public $serviceItems;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'requestId' => 'RequestId',
        'serviceItems' => 'ServiceItems',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->serviceItems)) {
            Model::validateArray($this->serviceItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceItems) {
            if (\is_array($this->serviceItems)) {
                $res['ServiceItems'] = [];
                $n1 = 0;
                foreach ($this->serviceItems as $item1) {
                    $res['ServiceItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceItems'])) {
            if (!empty($map['ServiceItems'])) {
                $model->serviceItems = [];
                $n1 = 0;
                foreach ($map['ServiceItems'] as $item1) {
                    $model->serviceItems[$n1++] = serviceItems::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
