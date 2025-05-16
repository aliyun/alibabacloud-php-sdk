<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListNodesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $privateIpAddress;

    /**
     * @var string[]
     */
    public $queueNames;

    /**
     * @var string
     */
    public $sequence;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string[]
     */
    public $status;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'hostnames' => 'Hostnames',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'privateIpAddress' => 'PrivateIpAddress',
        'queueNames' => 'QueueNames',
        'sequence' => 'Sequence',
        'sortBy' => 'SortBy',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->hostnames)) {
            Model::validateArray($this->hostnames);
        }
        if (\is_array($this->privateIpAddress)) {
            Model::validateArray($this->privateIpAddress);
        }
        if (\is_array($this->queueNames)) {
            Model::validateArray($this->queueNames);
        }
        if (\is_array($this->status)) {
            Model::validateArray($this->status);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->hostnames) {
            if (\is_array($this->hostnames)) {
                $res['Hostnames'] = [];
                $n1 = 0;
                foreach ($this->hostnames as $item1) {
                    $res['Hostnames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privateIpAddress) {
            if (\is_array($this->privateIpAddress)) {
                $res['PrivateIpAddress'] = [];
                $n1 = 0;
                foreach ($this->privateIpAddress as $item1) {
                    $res['PrivateIpAddress'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->queueNames) {
            if (\is_array($this->queueNames)) {
                $res['QueueNames'] = [];
                $n1 = 0;
                foreach ($this->queueNames as $item1) {
                    $res['QueueNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->status) {
            if (\is_array($this->status)) {
                $res['Status'] = [];
                $n1 = 0;
                foreach ($this->status as $item1) {
                    $res['Status'][$n1++] = $item1;
                }
            }
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = [];
                $n1 = 0;
                foreach ($map['Hostnames'] as $item1) {
                    $model->hostnames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivateIpAddress'])) {
            if (!empty($map['PrivateIpAddress'])) {
                $model->privateIpAddress = [];
                $n1 = 0;
                foreach ($map['PrivateIpAddress'] as $item1) {
                    $model->privateIpAddress[$n1++] = $item1;
                }
            }
        }

        if (isset($map['QueueNames'])) {
            if (!empty($map['QueueNames'])) {
                $model->queueNames = [];
                $n1 = 0;
                foreach ($map['QueueNames'] as $item1) {
                    $model->queueNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Status'])) {
            if (!empty($map['Status'])) {
                $model->status = [];
                $n1 = 0;
                foreach ($map['Status'] as $item1) {
                    $model->status[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
