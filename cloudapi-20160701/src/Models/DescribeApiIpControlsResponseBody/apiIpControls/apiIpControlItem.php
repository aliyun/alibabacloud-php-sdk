<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiIpControlsResponseBody\apiIpControls;

use AlibabaCloud\Tea\Model;

class apiIpControlItem extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $ipControlId;

    /**
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
