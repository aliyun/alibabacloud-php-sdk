<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterDetailFeatureResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $extend;

    /**
     * @var string
     */
    public $featureId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $orderNum;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'extend'    => 'Extend',
        'featureId' => 'FeatureId',
        'message'   => 'Message',
        'orderNum'  => 'OrderNum',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }
        if (null !== $this->featureId) {
            $res['FeatureId'] = $this->featureId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->orderNum) {
            $res['OrderNum'] = $this->orderNum;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }
        if (isset($map['FeatureId'])) {
            $model->featureId = $map['FeatureId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OrderNum'])) {
            $model->orderNum = $map['OrderNum'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
