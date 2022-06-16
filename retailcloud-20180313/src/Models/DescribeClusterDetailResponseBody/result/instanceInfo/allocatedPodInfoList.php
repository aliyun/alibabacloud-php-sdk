<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\instanceInfo;

use AlibabaCloud\Tea\Model;

class allocatedPodInfoList extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $cupRequest;

    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $envName;

    /**
     * @var string
     */
    public $memRequest;

    /**
     * @var int
     */
    public $podCount;
    protected $_name = [
        'appId'      => 'AppId',
        'appName'    => 'AppName',
        'cupRequest' => 'CupRequest',
        'envId'      => 'EnvId',
        'envName'    => 'EnvName',
        'memRequest' => 'MemRequest',
        'podCount'   => 'PodCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->cupRequest) {
            $res['CupRequest'] = $this->cupRequest;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->memRequest) {
            $res['MemRequest'] = $this->memRequest;
        }
        if (null !== $this->podCount) {
            $res['PodCount'] = $this->podCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allocatedPodInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CupRequest'])) {
            $model->cupRequest = $map['CupRequest'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['MemRequest'])) {
            $model->memRequest = $map['MemRequest'];
        }
        if (isset($map['PodCount'])) {
            $model->podCount = $map['PodCount'];
        }

        return $model;
    }
}
