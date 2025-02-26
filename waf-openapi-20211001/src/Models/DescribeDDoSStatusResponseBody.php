<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDDoSStatusResponseBody\DDoSStatus;

class DescribeDDoSStatusResponseBody extends Model
{
    /**
     * @var DDoSStatus[]
     */
    public $DDoSStatus;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DDoSStatus' => 'DDoSStatus',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->DDoSStatus)) {
            Model::validateArray($this->DDoSStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDoSStatus) {
            if (\is_array($this->DDoSStatus)) {
                $res['DDoSStatus'] = [];
                $n1                = 0;
                foreach ($this->DDoSStatus as $item1) {
                    $res['DDoSStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DDoSStatus'])) {
            if (!empty($map['DDoSStatus'])) {
                $model->DDoSStatus = [];
                $n1                = 0;
                foreach ($map['DDoSStatus'] as $item1) {
                    $model->DDoSStatus[$n1++] = DDoSStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
