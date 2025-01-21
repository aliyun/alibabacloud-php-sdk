<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\AddPrometheusGlobalViewResponseBody\data;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var string
     */
    public $failedInstances;
    /**
     * @var string
     */
    public $globalViewClusterId;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'failedInstances'     => 'FailedInstances',
        'globalViewClusterId' => 'GlobalViewClusterId',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedInstances) {
            $res['FailedInstances'] = $this->failedInstances;
        }

        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['FailedInstances'])) {
            $model->failedInstances = $map['FailedInstances'];
        }

        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
