<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponseBody\instanceDomains;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDomainsResponseBody extends Model
{
    /**
     * @var instanceDomains[]
     */
    public $instanceDomains;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 68386699-8B9E-4D5B-BC4C-75A28F6C2A00
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalItems;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'instanceDomains' => 'InstanceDomains',
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
        if (null !== $this->instanceDomains) {
            $res['InstanceDomains'] = [];
            if (null !== $this->instanceDomains && \is_array($this->instanceDomains)) {
                $n = 0;
                foreach ($this->instanceDomains as $item) {
                    $res['InstanceDomains'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceDomainsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDomains'])) {
            if (!empty($map['InstanceDomains'])) {
                $model->instanceDomains = [];
                $n                      = 0;
                foreach ($map['InstanceDomains'] as $item) {
                    $model->instanceDomains[$n++] = null !== $item ? instanceDomains::fromMap($item) : $item;
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
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
