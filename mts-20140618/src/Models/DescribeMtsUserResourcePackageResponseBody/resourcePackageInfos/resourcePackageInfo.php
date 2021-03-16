<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\DescribeMtsUserResourcePackageResponseBody\resourcePackageInfos;

use AlibabaCloud\Tea\Model;

class resourcePackageInfo extends Model
{
    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $currCapacity;

    /**
     * @var string
     */
    public $initCapacity;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'displayName'   => 'DisplayName',
        'status'        => 'Status',
        'commodityCode' => 'CommodityCode',
        'currCapacity'  => 'CurrCapacity',
        'initCapacity'  => 'InitCapacity',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->currCapacity) {
            $res['CurrCapacity'] = $this->currCapacity;
        }
        if (null !== $this->initCapacity) {
            $res['InitCapacity'] = $this->initCapacity;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePackageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CurrCapacity'])) {
            $model->currCapacity = $map['CurrCapacity'];
        }
        if (isset($map['InitCapacity'])) {
            $model->initCapacity = $map['InitCapacity'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
