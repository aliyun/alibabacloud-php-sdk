<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\ListInstancesRequest\tag;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string[]
     */
    public $instanceNameList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'instanceNameList' => 'InstanceNameList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->instanceNameList)) {
            Model::validateArray($this->instanceNameList);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceNameList) {
            if (\is_array($this->instanceNameList)) {
                $res['InstanceNameList'] = [];
                $n1 = 0;
                foreach ($this->instanceNameList as $item1) {
                    $res['InstanceNameList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceNameList'])) {
            if (!empty($map['InstanceNameList'])) {
                $model->instanceNameList = [];
                $n1 = 0;
                foreach ($map['InstanceNameList'] as $item1) {
                    $model->instanceNameList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
