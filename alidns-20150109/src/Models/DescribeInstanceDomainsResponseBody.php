<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeInstanceDomainsResponseBody\instanceDomains;

class DescribeInstanceDomainsResponseBody extends Model
{
    /**
     * @var instanceDomains[]
     */
    public $instanceDomains;

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
    public $totalItems;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'instanceDomains' => 'InstanceDomains',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
    ];

    public function validate()
    {
        if (\is_array($this->instanceDomains)) {
            Model::validateArray($this->instanceDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceDomains) {
            if (\is_array($this->instanceDomains)) {
                $res['InstanceDomains'] = [];
                $n1 = 0;
                foreach ($this->instanceDomains as $item1) {
                    $res['InstanceDomains'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceDomains'])) {
            if (!empty($map['InstanceDomains'])) {
                $model->instanceDomains = [];
                $n1 = 0;
                foreach ($map['InstanceDomains'] as $item1) {
                    $model->instanceDomains[$n1++] = instanceDomains::fromMap($item1);
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
