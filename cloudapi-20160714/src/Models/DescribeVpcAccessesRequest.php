<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVpcAccessesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeVpcAccessesRequest extends Model
{
    /**
     * @var bool
     */
    public $accurateQuery;

    /**
     * @description The ID of the instance.
     *
     * @example 10.199.26.***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the authorization. The name must be unique.
     *
     * @example wuying-edm-svc
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of the page to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The service port.
     *
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The tag of objects that match the rule. You can specify multiple tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the VPC authorization.
     *
     * @example vpc-*****ssds24
     *
     * @var string
     */
    public $vpcAccessId;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf657qec7lx42paw3qxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accurateQuery' => 'AccurateQuery',
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'port'          => 'Port',
        'securityToken' => 'SecurityToken',
        'tag'           => 'Tag',
        'vpcAccessId'   => 'VpcAccessId',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accurateQuery) {
            $res['AccurateQuery'] = $this->accurateQuery;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcAccessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccurateQuery'])) {
            $model->accurateQuery = $map['AccurateQuery'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
