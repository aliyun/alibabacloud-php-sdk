<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeQosesResponseBody\qoses;

use AlibabaCloud\Dara\Model;

class qos extends Model
{
    /**
     * @var string
     */
    public $qosDescription;

    /**
     * @var string
     */
    public $qosId;

    /**
     * @var string
     */
    public $qosName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sagCount;

    /**
     * @var string
     */
    public $smartAGIds;
    protected $_name = [
        'qosDescription' => 'QosDescription',
        'qosId' => 'QosId',
        'qosName' => 'QosName',
        'resourceGroupId' => 'ResourceGroupId',
        'sagCount' => 'SagCount',
        'smartAGIds' => 'SmartAGIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }

        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sagCount) {
            $res['SagCount'] = $this->sagCount;
        }

        if (null !== $this->smartAGIds) {
            $res['SmartAGIds'] = $this->smartAGIds;
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
        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }

        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }

        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['SagCount'])) {
            $model->sagCount = $map['SagCount'];
        }

        if (isset($map['SmartAGIds'])) {
            $model->smartAGIds = $map['SmartAGIds'];
        }

        return $model;
    }
}
