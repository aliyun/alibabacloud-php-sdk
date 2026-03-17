<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class flowLogIds extends Model
{
    /**
     * @var string[]
     */
    public $flowLogId;
    protected $_name = [
        'flowLogId' => 'FlowLogId',
    ];

    public function validate()
    {
        if (\is_array($this->flowLogId)) {
            Model::validateArray($this->flowLogId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowLogId) {
            if (\is_array($this->flowLogId)) {
                $res['FlowLogId'] = [];
                $n1 = 0;
                foreach ($this->flowLogId as $item1) {
                    $res['FlowLogId'][$n1] = $item1;
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
        if (isset($map['FlowLogId'])) {
            if (!empty($map['FlowLogId'])) {
                $model->flowLogId = [];
                $n1 = 0;
                foreach ($map['FlowLogId'] as $item1) {
                    $model->flowLogId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
