<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceClusterListRequest extends Model
{
    /**
     * @var string
     */
    public $instanceClusterId;

    /**
     * @var string
     */
    public $instanceClusterName;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'instanceClusterId'   => 'InstanceClusterId',
        'instanceClusterName' => 'InstanceClusterName',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'securityToken'       => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceClusterId) {
            $res['InstanceClusterId'] = $this->instanceClusterId;
        }
        if (null !== $this->instanceClusterName) {
            $res['InstanceClusterName'] = $this->instanceClusterName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceClusterListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceClusterId'])) {
            $model->instanceClusterId = $map['InstanceClusterId'];
        }
        if (isset($map['InstanceClusterName'])) {
            $model->instanceClusterName = $map['InstanceClusterName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
