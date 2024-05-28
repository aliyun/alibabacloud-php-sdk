<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ListCloudGtmInstanceConfigsResponseBody\instanceConfigs;
use AlibabaCloud\Tea\Model;

class ListCloudGtmInstanceConfigsResponseBody extends Model
{
    /**
     * @var instanceConfigs
     */
    public $instanceConfigs;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalItems;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'instanceConfigs' => 'InstanceConfigs',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'totalItems'      => 'TotalItems',
        'totalPages'      => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceConfigs) {
            $res['InstanceConfigs'] = null !== $this->instanceConfigs ? $this->instanceConfigs->toMap() : null;
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
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmInstanceConfigsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceConfigs'])) {
            $model->instanceConfigs = instanceConfigs::fromMap($map['InstanceConfigs']);
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
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
