<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ViewSmartAccessGatewayDnsForwardsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sagInsId;

    /**
     * @var string
     */
    public $sagSn;
    protected $_name = [
        'regionId' => 'RegionId',
        'sagInsId' => 'SagInsId',
        'sagSn' => 'SagSn',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sagInsId) {
            $res['SagInsId'] = $this->sagInsId;
        }

        if (null !== $this->sagSn) {
            $res['SagSn'] = $this->sagSn;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SagInsId'])) {
            $model->sagInsId = $map['SagInsId'];
        }

        if (isset($map['SagSn'])) {
            $model->sagSn = $map['SagSn'];
        }

        return $model;
    }
}
