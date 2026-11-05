<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterResourceUsageResponseBody\nodeItems;

use AlibabaCloud\Dara\Model;

class podItems extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameSpace;

    /**
     * @var string
     */
    public $podIP;

    /**
     * @var string
     */
    public $resourceRequest;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'name' => 'Name',
        'nameSpace' => 'NameSpace',
        'podIP' => 'PodIP',
        'resourceRequest' => 'ResourceRequest',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }

        if (null !== $this->podIP) {
            $res['PodIP'] = $this->podIP;
        }

        if (null !== $this->resourceRequest) {
            $res['ResourceRequest'] = $this->resourceRequest;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }

        if (isset($map['PodIP'])) {
            $model->podIP = $map['PodIP'];
        }

        if (isset($map['ResourceRequest'])) {
            $model->resourceRequest = $map['ResourceRequest'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
