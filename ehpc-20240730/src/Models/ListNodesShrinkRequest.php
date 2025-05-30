<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;

class ListNodesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $hostnamesShrink;

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
    public $privateIpAddressShrink;

    /**
     * @var string
     */
    public $queueNamesShrink;

    /**
     * @var string
     */
    public $sequence;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $statusShrink;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'hostnamesShrink' => 'Hostnames',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'privateIpAddressShrink' => 'PrivateIpAddress',
        'queueNamesShrink' => 'QueueNames',
        'sequence' => 'Sequence',
        'sortBy' => 'SortBy',
        'statusShrink' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->hostnamesShrink) {
            $res['Hostnames'] = $this->hostnamesShrink;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privateIpAddressShrink) {
            $res['PrivateIpAddress'] = $this->privateIpAddressShrink;
        }

        if (null !== $this->queueNamesShrink) {
            $res['QueueNames'] = $this->queueNamesShrink;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->statusShrink) {
            $res['Status'] = $this->statusShrink;
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
            $model->hostnamesShrink = $map['Hostnames'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddressShrink = $map['PrivateIpAddress'];
        }

        if (isset($map['QueueNames'])) {
            $model->queueNamesShrink = $map['QueueNames'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['Status'])) {
            $model->statusShrink = $map['Status'];
        }

        return $model;
    }
}
