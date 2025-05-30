<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class ModifyElasticBizBandWidthRequest extends Model
{
    /**
     * @var int
     */
    public $elasticBizBandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'elasticBizBandwidth' => 'ElasticBizBandwidth',
        'instanceId' => 'InstanceId',
        'mode' => 'Mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticBizBandwidth) {
            $res['ElasticBizBandwidth'] = $this->elasticBizBandwidth;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['ElasticBizBandwidth'])) {
            $model->elasticBizBandwidth = $map['ElasticBizBandwidth'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
