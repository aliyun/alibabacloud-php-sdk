<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserAbnormalTypeResponseBody\abnormal;

class DescribeUserAbnormalTypeResponseBody extends Model
{
    /**
     * @var abnormal[]
     */
    public $abnormal;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormal' => 'Abnormal',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->abnormal)) {
            Model::validateArray($this->abnormal);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormal) {
            if (\is_array($this->abnormal)) {
                $res['Abnormal'] = [];
                $n1 = 0;
                foreach ($this->abnormal as $item1) {
                    $res['Abnormal'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Abnormal'])) {
            if (!empty($map['Abnormal'])) {
                $model->abnormal = [];
                $n1 = 0;
                foreach ($map['Abnormal'] as $item1) {
                    $model->abnormal[$n1] = abnormal::fromMap($item1);
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
