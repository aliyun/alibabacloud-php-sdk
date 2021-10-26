<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody\apiIpControls;

use AlibabaCloud\Tea\Model;

class apiIpControlItem extends Model
{
    /**
     * @var string
     */
    public $boundTime;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $ipControlId;

    /**
     * @var string
     */
    public $ipControlName;

    /**
     * @var string
     */
    public $apiName;
    protected $_name = [
        'boundTime'     => 'BoundTime',
        'apiId'         => 'ApiId',
        'ipControlId'   => 'IpControlId',
        'ipControlName' => 'IpControlName',
        'apiName'       => 'ApiName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boundTime) {
            $res['BoundTime'] = $this->boundTime;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }
        if (null !== $this->ipControlName) {
            $res['IpControlName'] = $this->ipControlName;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
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
        if (isset($map['BoundTime'])) {
            $model->boundTime = $map['BoundTime'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }
        if (isset($map['IpControlName'])) {
            $model->ipControlName = $map['IpControlName'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }

        return $model;
    }
}
