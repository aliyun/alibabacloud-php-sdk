<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceCountriesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceCountrys extends Model
{
    /**
     * @description The total number of requests.
     *
     * @example 3390671
     *
     * @var int
     */
    public $count;

    /**
     * @description The abbreviation of the country or area. For more information, see the **Codes of countries and areas** section of the [Codes of administrative regions in China and codes of countries and areas](https://help.aliyun.com/document_detail/167926.html) topic. For example, **cn** indicates China, and **us** indicates the United States.
     *
     * @example cn
     *
     * @var string
     */
    public $countryId;
    protected $_name = [
        'count'     => 'Count',
        'countryId' => 'CountryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceCountrys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }

        return $model;
    }
}
