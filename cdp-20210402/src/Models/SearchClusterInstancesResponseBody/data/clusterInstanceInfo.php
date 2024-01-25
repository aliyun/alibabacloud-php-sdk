<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models\SearchClusterInstancesResponseBody\data;

use AlibabaCloud\Tea\Model;

class clusterInstanceInfo extends Model
{
    /**
     * @var string
     */
    public $controlCenterLoginName;

    /**
     * @var string
     */
    public $controlCenterUrl;

    /**
     * @var string
     */
    public $sgId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;
    protected $_name = [
        'controlCenterLoginName' => 'ControlCenterLoginName',
        'controlCenterUrl'       => 'ControlCenterUrl',
        'sgId'                   => 'SgId',
        'vpcId'                  => 'VpcId',
        'vswId'                  => 'VswId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->controlCenterLoginName) {
            $res['ControlCenterLoginName'] = $this->controlCenterLoginName;
        }
        if (null !== $this->controlCenterUrl) {
            $res['ControlCenterUrl'] = $this->controlCenterUrl;
        }
        if (null !== $this->sgId) {
            $res['SgId'] = $this->sgId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterInstanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ControlCenterLoginName'])) {
            $model->controlCenterLoginName = $map['ControlCenterLoginName'];
        }
        if (isset($map['ControlCenterUrl'])) {
            $model->controlCenterUrl = $map['ControlCenterUrl'];
        }
        if (isset($map['SgId'])) {
            $model->sgId = $map['SgId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        return $model;
    }
}
