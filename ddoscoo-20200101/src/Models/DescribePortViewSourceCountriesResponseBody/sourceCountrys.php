<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceCountriesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceCountrys extends Model
{
    /**
     * @var string
     */
    public $countryId;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'countryId' => 'CountryId',
        'count'     => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countryId) {
            $res['CountryId'] = $this->countryId;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['CountryId'])) {
            $model->countryId = $map['CountryId'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
