<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortViewSourceCountriesResponseBody;

use AlibabaCloud\Tea\Model;

class sourceCountrys extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
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
