<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data\thesaurusPo\synonymList;
use AlibabaCloud\Tea\Model;

class thesaurusPo extends Model
{
    /**
     * @example BVT
     *
     * @var string
     */
    public $business;

    /**
     * @example 473
     *
     * @var int
     */
    public $id;

    /**
     * @var synonymList
     */
    public $synonymList;
    protected $_name = [
        'business'    => 'Business',
        'id'          => 'Id',
        'synonymList' => 'SynonymList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->synonymList) {
            $res['SynonymList'] = null !== $this->synonymList ? $this->synonymList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return thesaurusPo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SynonymList'])) {
            $model->synonymList = synonymList::fromMap($map['SynonymList']);
        }

        return $model;
    }
}
