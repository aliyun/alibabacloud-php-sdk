<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class GetQosAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $qosId;
    protected $_name = [
        'regionId' => 'RegionId',
        'qosId'    => 'QosId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQosAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        return $model;
    }
}
