<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeNetworkInstanceListResponseBody;

use AlibabaCloud\Dara\Model;

class networkInstanceList extends Model
{
    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $networkInstanceName;

    /**
     * @var string
     */
    public $networkInstanceType;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'networkInstanceId' => 'NetworkInstanceId',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceType' => 'NetworkInstanceType',
        'regionNo' => 'RegionNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }

        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }

        if (null !== $this->networkInstanceType) {
            $res['NetworkInstanceType'] = $this->networkInstanceType;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
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
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }

        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }

        if (isset($map['NetworkInstanceType'])) {
            $model->networkInstanceType = $map['NetworkInstanceType'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
