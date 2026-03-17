<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody\qosCars;
use AlibabaCloud\SDK\Smartag\V20180313\Models\GetQosAttributeResponseBody\qosPolicies;

class GetQosAttributeResponseBody extends Model
{
    /**
     * @var int
     */
    public $errorConfigSmartAGCount;

    /**
     * @var qosCars[]
     */
    public $qosCars;

    /**
     * @var string
     */
    public $qosDescription;

    /**
     * @var string
     */
    public $qosName;

    /**
     * @var qosPolicies[]
     */
    public $qosPolicies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'errorConfigSmartAGCount' => 'ErrorConfigSmartAGCount',
        'qosCars' => 'QosCars',
        'qosDescription' => 'QosDescription',
        'qosName' => 'QosName',
        'qosPolicies' => 'QosPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->qosCars)) {
            Model::validateArray($this->qosCars);
        }
        if (\is_array($this->qosPolicies)) {
            Model::validateArray($this->qosPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorConfigSmartAGCount) {
            $res['ErrorConfigSmartAGCount'] = $this->errorConfigSmartAGCount;
        }

        if (null !== $this->qosCars) {
            if (\is_array($this->qosCars)) {
                $res['QosCars'] = [];
                $n1 = 0;
                foreach ($this->qosCars as $item1) {
                    $res['QosCars'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qosDescription) {
            $res['QosDescription'] = $this->qosDescription;
        }

        if (null !== $this->qosName) {
            $res['QosName'] = $this->qosName;
        }

        if (null !== $this->qosPolicies) {
            if (\is_array($this->qosPolicies)) {
                $res['QosPolicies'] = [];
                $n1 = 0;
                foreach ($this->qosPolicies as $item1) {
                    $res['QosPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ErrorConfigSmartAGCount'])) {
            $model->errorConfigSmartAGCount = $map['ErrorConfigSmartAGCount'];
        }

        if (isset($map['QosCars'])) {
            if (!empty($map['QosCars'])) {
                $model->qosCars = [];
                $n1 = 0;
                foreach ($map['QosCars'] as $item1) {
                    $model->qosCars[$n1] = qosCars::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['QosDescription'])) {
            $model->qosDescription = $map['QosDescription'];
        }

        if (isset($map['QosName'])) {
            $model->qosName = $map['QosName'];
        }

        if (isset($map['QosPolicies'])) {
            if (!empty($map['QosPolicies'])) {
                $model->qosPolicies = [];
                $n1 = 0;
                foreach ($map['QosPolicies'] as $item1) {
                    $model->qosPolicies[$n1] = qosPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
