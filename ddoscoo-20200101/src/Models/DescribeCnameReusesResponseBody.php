<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeCnameReusesResponseBody\cnameReuses;

class DescribeCnameReusesResponseBody extends Model
{
    /**
     * @var cnameReuses[]
     */
    public $cnameReuses;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cnameReuses' => 'CnameReuses',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->cnameReuses)) {
            Model::validateArray($this->cnameReuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnameReuses) {
            if (\is_array($this->cnameReuses)) {
                $res['CnameReuses'] = [];
                $n1 = 0;
                foreach ($this->cnameReuses as $item1) {
                    $res['CnameReuses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CnameReuses'])) {
            if (!empty($map['CnameReuses'])) {
                $model->cnameReuses = [];
                $n1 = 0;
                foreach ($map['CnameReuses'] as $item1) {
                    $model->cnameReuses[$n1] = cnameReuses::fromMap($item1);
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
