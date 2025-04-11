<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody\apiIpControls;

use AlibabaCloud\Dara\Model;

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
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'boundTime' => 'BoundTime',
        'ipControlId' => 'IpControlId',
        'ipControlName' => 'IpControlName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
