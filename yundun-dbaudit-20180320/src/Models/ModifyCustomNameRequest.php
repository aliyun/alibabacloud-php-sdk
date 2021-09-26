<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ModifyCustomNameRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $customName;
    protected $_name = [
        'sourceIp'      => 'SourceIp',
        'commodityCode' => 'CommodityCode',
        'instanceId'    => 'InstanceId',
        'customName'    => 'CustomName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->customName) {
            $res['CustomName'] = $this->customName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCustomNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CustomName'])) {
            $model->customName = $map['CustomName'];
        }

        return $model;
    }
}
