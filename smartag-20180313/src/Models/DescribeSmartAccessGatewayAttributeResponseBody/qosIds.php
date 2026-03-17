<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class qosIds extends Model
{
    /**
     * @var string[]
     */
    public $qosId;
    protected $_name = [
        'qosId' => 'QosId',
    ];

    public function validate()
    {
        if (\is_array($this->qosId)) {
            Model::validateArray($this->qosId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qosId) {
            if (\is_array($this->qosId)) {
                $res['QosId'] = [];
                $n1 = 0;
                foreach ($this->qosId as $item1) {
                    $res['QosId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['QosId'])) {
            if (!empty($map['QosId'])) {
                $model->qosId = [];
                $n1 = 0;
                foreach ($map['QosId'] as $item1) {
                    $model->qosId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
