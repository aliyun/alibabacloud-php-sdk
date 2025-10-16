<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAckClusterPodLabelsResponseBody\ackLabels;

class DescribeAckClusterPodLabelsResponseBody extends Model
{
    /**
     * @var ackLabels[]
     */
    public $ackLabels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ackLabels' => 'AckLabels',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->ackLabels)) {
            Model::validateArray($this->ackLabels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ackLabels) {
            if (\is_array($this->ackLabels)) {
                $res['AckLabels'] = [];
                $n1 = 0;
                foreach ($this->ackLabels as $item1) {
                    $res['AckLabels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AckLabels'])) {
            if (!empty($map['AckLabels'])) {
                $model->ackLabels = [];
                $n1 = 0;
                foreach ($map['AckLabels'] as $item1) {
                    $model->ackLabels[$n1] = ackLabels::fromMap($item1);
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
