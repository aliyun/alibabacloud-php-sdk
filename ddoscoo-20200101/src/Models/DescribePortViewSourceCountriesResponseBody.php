<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceCountriesResponseBody\sourceCountrys;

class DescribePortViewSourceCountriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sourceCountrys[]
     */
    public $sourceCountrys;
    protected $_name = [
        'requestId' => 'RequestId',
        'sourceCountrys' => 'SourceCountrys',
    ];

    public function validate()
    {
        if (\is_array($this->sourceCountrys)) {
            Model::validateArray($this->sourceCountrys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceCountrys) {
            if (\is_array($this->sourceCountrys)) {
                $res['SourceCountrys'] = [];
                $n1 = 0;
                foreach ($this->sourceCountrys as $item1) {
                    $res['SourceCountrys'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SourceCountrys'])) {
            if (!empty($map['SourceCountrys'])) {
                $model->sourceCountrys = [];
                $n1 = 0;
                foreach ($map['SourceCountrys'] as $item1) {
                    $model->sourceCountrys[$n1++] = sourceCountrys::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
