<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponseBody\instanceDomains;
use AlibabaCloud\Tea\Model;

class DescribeInstanceDomainsResponseBody extends Model
{
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
    public $pageNumber;

    /**
     * @var instanceDomains[]
     */
    public $instanceDomains;

    /**
     * @var int
     */
    public $totalPages;

    /**
     * @var int
     */
    public $totalItems;
    protected $_name = [
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'instanceDomains' => 'InstanceDomains',
        'totalPages'      => 'TotalPages',
        'totalItems'      => 'TotalItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->instanceDomains) {
            $res['InstanceDomains'] = [];
            if (null !== $this->instanceDomains && \is_array($this->instanceDomains)) {
                $n = 0;
                foreach ($this->instanceDomains as $item) {
                    $res['InstanceDomains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['InstanceDomains'])) {
            if (!empty($map['InstanceDomains'])) {
                $model->instanceDomains = [];
                $n                      = 0;
                foreach ($map['InstanceDomains'] as $item) {
                    $model->instanceDomains[$n++] = null !== $item ? instanceDomains::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }

        return $model;
    }
}
