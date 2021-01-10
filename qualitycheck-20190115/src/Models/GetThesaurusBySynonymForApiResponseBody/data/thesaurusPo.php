<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetThesaurusBySynonymForApiResponseBody\data\thesaurusPo\synonymList;
use AlibabaCloud\Tea\Model;

class thesaurusPo extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @var synonymList
     */
    public $synonymList;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'business'    => 'Business',
        'synonymList' => 'SynonymList',
        'id'          => 'Id',
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
        if (null !== $this->synonymList) {
            $res['SynonymList'] = null !== $this->synonymList ? $this->synonymList->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['SynonymList'])) {
            $model->synonymList = synonymList::fromMap($map['SynonymList']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
