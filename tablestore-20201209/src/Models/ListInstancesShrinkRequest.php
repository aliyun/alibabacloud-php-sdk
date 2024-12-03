<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesShrinkRequest extends Model
{
    /**
     * @description The name of the instance. Fuzzy search is supported.
     *
     * @example instance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The names of the instances. This parameter is used to specify multiple instances that you want to query at the same time.
     *
     * @var string
     */
    public $instanceNameListShrink;

    /**
     * @description The maximum number of instances that you want to return. Valid values: 0 to 200. If you do not configure this parameter or set this parameter to 0, the default value of 100 is used.
     *
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start position of the query. Set this parameter to the value of the NextToken parameter that is returned from the last call. Instances are returned in lexicographical order starting from the position that is specified by this parameter. The first time you call the operation, leave this parameter empty.
     *
     * @example CAESCG15aC1xxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource group ID. You can query the ID on the Resource Group page in the Resource Management console.
     *
     * @example rg-aek24upgom6p5ri
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The instance status.
     *
     *   normal: The instance is running as expected.
     *   forbidden: The instance is disabled.
     *   Deleting: The instance is being deleted.
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'instanceName'           => 'InstanceName',
        'instanceNameListShrink' => 'InstanceNameList',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'resourceGroupId'        => 'ResourceGroupId',
        'status'                 => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceNameListShrink) {
            $res['InstanceNameList'] = $this->instanceNameListShrink;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceNameList'])) {
            $model->instanceNameListShrink = $map['InstanceNameList'];
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

        return $model;
    }
}
