<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody\apiIpControls;

use AlibabaCloud\Tea\Model;

class apiIpControlItem extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 46fbb52840d146f186e38e8e70fc8c90
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The name of the API.
     *
     * @example testapi
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The time of binding.
     *
     * @example 2016-07-23T08:28:48Z
     *
     * @var string
     */
    public $boundTime;

    /**
     * @description The ID of the ACL.
     *
     * @example dd05f1c54d6749eda95f9fa6d491449a
     *
     * @var string
     */
    public $ipControlId;

    /**
     * @description The name of the ACL.
     *
     * @example testControlName
     *
     * @var string
     */
    public $ipControlName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'apiName'       => 'ApiName',
        'boundTime'     => 'BoundTime',
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiIpControlItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }

        return $model;
    }
}
