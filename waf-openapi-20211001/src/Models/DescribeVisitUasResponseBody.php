<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVisitUasResponseBody\uas;

class DescribeVisitUasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uas[]
     */
    public $uas;
    protected $_name = [
        'requestId' => 'RequestId',
        'uas' => 'Uas',
    ];

    public function validate()
    {
        if (\is_array($this->uas)) {
            Model::validateArray($this->uas);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->uas) {
            if (\is_array($this->uas)) {
                $res['Uas'] = [];
                $n1 = 0;
                foreach ($this->uas as $item1) {
                    $res['Uas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Uas'])) {
            if (!empty($map['Uas'])) {
                $model->uas = [];
                $n1 = 0;
                foreach ($map['Uas'] as $item1) {
                    $model->uas[$n1] = uas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
