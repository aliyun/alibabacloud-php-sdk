<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetworkAclsRequest extends Model
{
    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-bp1lhl0taikrbgnh****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @description The name of the network ACL.
     *
     * The name must be 1 to 128 characters in length. The name cannot start with \*\*http:// **or** https://\*\*.
     * @example acl-1
     *
     * @var string
     */
    public $networkAclName;

    /**
     * @description The page number. Pages start from page **1**. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The ID of the associated instance.
     *
     * @example n-5****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'networkAclId'   => 'NetworkAclId',
        'networkAclName' => 'NetworkAclName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'resourceId'     => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
        }
        if (null !== $this->networkAclName) {
            $res['NetworkAclName'] = $this->networkAclName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkAclsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
        }
        if (isset($map['NetworkAclName'])) {
            $model->networkAclName = $map['NetworkAclName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
