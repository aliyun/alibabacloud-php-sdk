<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody\qosCars;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody\qosPolicies;
use AlibabaCloud\Tea\Model;

class GetQosAttributeResponseBody extends Model
{
    /**
     * @var qosPolicies[]
     */
    public $qosPolicies;

    /**
     * @var qosCars[]
     */
    public $qosCars;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $errorConfigSmartAGCount;

    /**
     * @var string
     */
    public $qosName;

    /**
     * @var string
     */
    public $qosDescription;
    protected $_name = [
        'qosPolicies'             => 'QosPolicies',
        'qosCars'                 => 'QosCars',
        'requestId'               => 'RequestId',
        'errorConfigSmartAGCount' => 'ErrorConfigSmartAGCount',
        'qosName'                 => 'QosName',
        'qosDescription'          => 'QosDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosPolicies) {
            $res['QosPolicies'] = [];
            if (null !== $this->qosPolicies && \is_array($this->qosPolicies)) {
                $n = 0;
                foreach ($this->qosPolicies as $item) {
                    $res['QosPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->qosCars) {
            $res['QosCars'] = [];
            if (null !== $this->qosCars && \is_array($this->qosCars)) {
                $n = 0;
                foreach ($this->qosCars as $item) {
                    $res['QosCars'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->errorConfigSmartAGCount) {
            $res['ErrorConfigSmartAGCount'] = $this->errorConfigSmartAGCount;
        }
        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }
        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQosAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosPolicies'])) {
            if (!empty($map['QosPolicies'])) {
                $model->qosPolicies = [];
                $n                  = 0;
                foreach ($map['QosPolicies'] as $item) {
                    $model->qosPolicies[$n++] = null !== $item ? qosPolicies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['QosCars'])) {
            if (!empty($map['QosCars'])) {
                $model->qosCars = [];
                $n              = 0;
                foreach ($map['QosCars'] as $item) {
                    $model->qosCars[$n++] = null !== $item ? qosCars::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ErrorConfigSmartAGCount'])) {
            $model->errorConfigSmartAGCount = $map['ErrorConfigSmartAGCount'];
        }
        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }
        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }

        return $model;
    }
}
