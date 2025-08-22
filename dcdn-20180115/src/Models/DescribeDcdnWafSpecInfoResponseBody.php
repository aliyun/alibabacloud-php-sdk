<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafSpecInfoResponseBody\specInfos;

class DescribeDcdnWafSpecInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var specInfos[]
     */
    public $specInfos;
    protected $_name = [
        'edition' => 'Edition',
        'requestId' => 'RequestId',
        'specInfos' => 'SpecInfos',
    ];

    public function validate()
    {
        if (\is_array($this->specInfos)) {
            Model::validateArray($this->specInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->specInfos) {
            if (\is_array($this->specInfos)) {
                $res['SpecInfos'] = [];
                $n1 = 0;
                foreach ($this->specInfos as $item1) {
                    $res['SpecInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpecInfos'])) {
            if (!empty($map['SpecInfos'])) {
                $model->specInfos = [];
                $n1 = 0;
                foreach ($map['SpecInfos'] as $item1) {
                    $model->specInfos[$n1] = specInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
