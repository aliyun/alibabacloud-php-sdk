<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnKvAccountResponseBody\namespaceList;

class DescribeDcdnKvAccountResponseBody extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $capacityString;

    /**
     * @var int
     */
    public $capacityUsed;

    /**
     * @var string
     */
    public $capacityUsedString;

    /**
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @var int
     */
    public $namespaceQuota;

    /**
     * @var int
     */
    public $namespaceUsed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'capacity' => 'Capacity',
        'capacityString' => 'CapacityString',
        'capacityUsed' => 'CapacityUsed',
        'capacityUsedString' => 'CapacityUsedString',
        'namespaceList' => 'NamespaceList',
        'namespaceQuota' => 'NamespaceQuota',
        'namespaceUsed' => 'NamespaceUsed',
        'requestId' => 'RequestId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceList)) {
            Model::validateArray($this->namespaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->capacityString) {
            $res['CapacityString'] = $this->capacityString;
        }

        if (null !== $this->capacityUsed) {
            $res['CapacityUsed'] = $this->capacityUsed;
        }

        if (null !== $this->capacityUsedString) {
            $res['CapacityUsedString'] = $this->capacityUsedString;
        }

        if (null !== $this->namespaceList) {
            if (\is_array($this->namespaceList)) {
                $res['NamespaceList'] = [];
                $n1 = 0;
                foreach ($this->namespaceList as $item1) {
                    $res['NamespaceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespaceQuota) {
            $res['NamespaceQuota'] = $this->namespaceQuota;
        }

        if (null !== $this->namespaceUsed) {
            $res['NamespaceUsed'] = $this->namespaceUsed;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CapacityString'])) {
            $model->capacityString = $map['CapacityString'];
        }

        if (isset($map['CapacityUsed'])) {
            $model->capacityUsed = $map['CapacityUsed'];
        }

        if (isset($map['CapacityUsedString'])) {
            $model->capacityUsedString = $map['CapacityUsedString'];
        }

        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n1 = 0;
                foreach ($map['NamespaceList'] as $item1) {
                    $model->namespaceList[$n1] = namespaceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NamespaceQuota'])) {
            $model->namespaceQuota = $map['NamespaceQuota'];
        }

        if (isset($map['NamespaceUsed'])) {
            $model->namespaceUsed = $map['NamespaceUsed'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
