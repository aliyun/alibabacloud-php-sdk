<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models\DescribeAccessWhiteListSlbListResponseBody;

use AlibabaCloud\Tea\Model;

class slbList extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $itemSign;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'IP'           => 'IP',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'itemSign'     => 'ItemSign',
        'region'       => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->itemSign) {
            $res['ItemSign'] = $this->itemSign;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ItemSign'])) {
            $model->itemSign = $map['ItemSign'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
