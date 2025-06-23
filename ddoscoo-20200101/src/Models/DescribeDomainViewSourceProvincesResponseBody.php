<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceProvincesResponseBody\sourceProvinces;

class DescribeDomainViewSourceProvincesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceProvinces[]
     */
    public $sourceProvinces;
    protected $_name = [
        'requestId' => 'RequestId',
        'sourceProvinces' => 'SourceProvinces',
    ];

    public function validate()
    {
        if (\is_array($this->sourceProvinces)) {
            Model::validateArray($this->sourceProvinces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceProvinces) {
            if (\is_array($this->sourceProvinces)) {
                $res['SourceProvinces'] = [];
                $n1 = 0;
                foreach ($this->sourceProvinces as $item1) {
                    $res['SourceProvinces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SourceProvinces'])) {
            if (!empty($map['SourceProvinces'])) {
                $model->sourceProvinces = [];
                $n1 = 0;
                foreach ($map['SourceProvinces'] as $item1) {
                    $model->sourceProvinces[$n1] = sourceProvinces::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
