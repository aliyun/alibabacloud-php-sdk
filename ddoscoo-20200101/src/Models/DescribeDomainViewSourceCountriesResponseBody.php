<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceCountriesResponseBody\sourceCountrys;
use AlibabaCloud\Tea\Model;

class DescribeDomainViewSourceCountriesResponseBody extends Model
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
        'requestId'      => 'RequestId',
        'sourceCountrys' => 'SourceCountrys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceCountrys) {
            $res['SourceCountrys'] = [];
            if (null !== $this->sourceCountrys && \is_array($this->sourceCountrys)) {
                $n = 0;
                foreach ($this->sourceCountrys as $item) {
                    $res['SourceCountrys'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainViewSourceCountriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceCountrys'])) {
            if (!empty($map['SourceCountrys'])) {
                $model->sourceCountrys = [];
                $n                     = 0;
                foreach ($map['SourceCountrys'] as $item) {
                    $model->sourceCountrys[$n++] = null !== $item ? sourceCountrys::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
