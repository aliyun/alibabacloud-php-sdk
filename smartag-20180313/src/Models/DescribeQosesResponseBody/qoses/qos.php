<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody\qoses;

use AlibabaCloud\Tea\Model;

class qos extends Model
{
    /**
     * @var string
     */
    public $qosDescription;

    /**
     * @var string
     */
    public $sagCount;

    /**
     * @var string
     */
    public $smartAGIds;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $qosName;
    protected $_name = [
        'qosDescription' => 'QosDescription',
        'sagCount'       => 'SagCount',
        'smartAGIds'     => 'SmartAGIds',
        'qosId'          => 'QosId',
        'qosName'        => 'QosName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }
        if (null !== $this->sagCount) {
            $res['SagCount'] = $this->sagCount;
        }
        if (null !== $this->smartAGIds) {
            $res['SmartAGIds'] = $this->smartAGIds;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }
        if (isset($map['SagCount'])) {
            $model->sagCount = $map['SagCount'];
        }
        if (isset($map['SmartAGIds'])) {
            $model->smartAGIds = $map['SmartAGIds'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }

        return $model;
    }
}
