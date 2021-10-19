<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class resourcePrivateIPList extends Model
{
    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var string
     */
    public $resourcePrivateIP;

    /**
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourcePrivateIP'    => 'ResourcePrivateIP',
        'resourceInstanceId'   => 'ResourceInstanceId',
        'regionNo'             => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }
        if (null !== $this->resourcePrivateIP) {
            $res['ResourcePrivateIP'] = $this->resourcePrivateIP;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePrivateIPList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }
        if (isset($map['ResourcePrivateIP'])) {
            $model->resourcePrivateIP = $map['ResourcePrivateIP'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
