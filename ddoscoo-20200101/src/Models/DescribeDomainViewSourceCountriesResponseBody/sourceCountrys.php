<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainViewSourceCountriesResponseBody;

use AlibabaCloud\Dara\Model;

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
        'count' => 'Count',
        'countryId' => 'CountryId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
