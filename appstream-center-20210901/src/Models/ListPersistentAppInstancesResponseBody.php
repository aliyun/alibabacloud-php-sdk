<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListPersistentAppInstancesResponseBody\persistentAppInstanceModels;

class ListPersistentAppInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var persistentAppInstanceModels[]
     */
    public $persistentAppInstanceModels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'persistentAppInstanceModels' => 'PersistentAppInstanceModels',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->persistentAppInstanceModels)) {
            Model::validateArray($this->persistentAppInstanceModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->persistentAppInstanceModels) {
            if (\is_array($this->persistentAppInstanceModels)) {
                $res['PersistentAppInstanceModels'] = [];
                $n1 = 0;
                foreach ($this->persistentAppInstanceModels as $item1) {
                    $res['PersistentAppInstanceModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PersistentAppInstanceModels'])) {
            if (!empty($map['PersistentAppInstanceModels'])) {
                $model->persistentAppInstanceModels = [];
                $n1 = 0;
                foreach ($map['PersistentAppInstanceModels'] as $item1) {
                    $model->persistentAppInstanceModels[$n1++] = persistentAppInstanceModels::fromMap($item1);
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
